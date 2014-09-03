<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class process_money extends CI_Controller 
{

	public function index()
	{
		if($this->input->post('reset'))
			{
				$this->session->unset_userdata('gold');
				$this->session->unset_userdata('activities');
			}
//this function index() has several steps: first it is checking to see if post "reset button" is pressed, if it is pressed, then it will unset the userdata ('gold'), and unset the userdata('activities') to BE BLANK in order to start the game over.

			//now below, we are checking to see if post('building') has posted, and if it has, then set a variable called $building equal to post('building') - and then we are running a switch on the building/and the points related to the specific 'buildings: farm, cave, house, casino' (random numbers) - get set to the variable called $gold, we then reference this on 'ninja_gold_view page, in the echo'
		if($this->input->post('building'))
		{
			$building = $this->input->post('building');
			switch($building){

			  case 'farm':
			    $gold=rand(10,20);
			    break;

			  case 'cave':
			    $gold=rand(5,10);
			    break;

			  case 'house':
			    $gold=rand(2,5);
			    break;

			  case 'casino':
			    $gold=rand(-50,50);
			    break;	
		}


// here we run an if/else statement to see if the $gold is greater than 0, because the Farm, Cave, House have positive gains, while Casino building could take points away in the game, thus printing out a "lost" activity record in the Activities box.
		if($gold >0)
				{
					$var1 = 'You entered a '.$building.'. You earned '.$gold.' gold!';
				}
			else
				{
					$var1 = 'You went into a '.$building.'. You lost '.$gold.' gold!';
				}

// this says, set the session userdata of "activities" and set it equal to a variable called $var2, then set that $var2 variable to equal $var1, then 
			$var2 = $this->session->userdata('activities');
			$var2[] = $var1;
			$this->session->set_userdata('activities',$var2);

			$money = $this->session->userdata('gold');
			$money += $gold;
			$this->session->set_userdata('gold',$money);
		}
		redirect('ninja_golds');
	}
}


