<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Home extends Component
{
  public $username;
  public $profile;

  public function render()
  {
    return view('livewire.home');
  }

  public function getDataGithub()
  {
    if ($this->username != '') {
      $response = Http::get('https://api.github.com/users/' . $this->username);
      $this->profile = $response->json();
    } else {
      $this->profile = null;
    }
  }
}