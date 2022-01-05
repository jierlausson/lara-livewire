<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
  public $name;
  public $email;
  public $message;
  public $successMessage;

  /* public function mount()
  {
    $this->name = 'Qualquer coisa';
  } */

  protected $rules = [
    'name' => 'required|min:6',
    'email' => 'required|email',
    'message' => 'required|min:10',
  ];

  protected $messages = [
    'name.required' => 'Informe seu nome completo.',
    'name.min' => 'Informe no mínimo 6 carecteres.',
    'email.email' => 'Informe um email válido.',
  ];

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }

  public function submitForm()
  {
    sleep(2);
    $validatedData = $this->validate();
    $this->reset(['name', 'email', 'message']);
    $this->successMessage = "Hey {$validatedData['name']}, o seu contato foi enviado com sucesso!";
  }
}