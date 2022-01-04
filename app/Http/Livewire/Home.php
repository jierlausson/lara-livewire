<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Home extends Component
{
  public $username;
  public $profile;
  public $not;

  public function render()
  {
    return view('livewire.home');
  }

  public function getDataGithub()
  {
    $this->validate([
      "username" => 'required|min:3'
    ]);
    if ($this->username != '') {
      $response = Http::get('https://api.github.com/users/' . $this->username);
      if ($response->json(['name'])) {
        $this->profile = $response->json();
        $this->not = null;
      } else if ($response->json(['message']) == 'Not Found') {
        $this->profile = null;
        $this->not = 'Usuário não encontrado!';
      }
    } else {
      $this->profile = null;
      $this->not = null;
    }
  }
}