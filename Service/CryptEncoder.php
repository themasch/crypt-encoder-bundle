<?php
namespace maschit\CryptEncoderBundle\Service;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class CryptEncoder implements PasswordEncoderInterface
{

  public function encodePassword($raw, $salt)
  {
    return crypt($raw, $salt);
  }

  public function isPasswordValid($encoded, $raw, $salt)
  {
    return $encoded === $this->encodePassword($raw, $salt);
  }

}