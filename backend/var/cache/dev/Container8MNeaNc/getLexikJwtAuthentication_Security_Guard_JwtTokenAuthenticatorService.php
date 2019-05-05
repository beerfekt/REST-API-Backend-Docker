<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'lexik_jwt_authentication.security.guard.jwt_token_authenticator' shared service.

return $this->privates['lexik_jwt_authentication.security.guard.jwt_token_authenticator'] = new \Lexik\Bundle\JWTAuthenticationBundle\Security\Guard\JWTTokenAuthenticator(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->load('getLexikJwtAuthentication_JwtManagerService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor(array(0 => new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor('Bearer', 'Authorization'))));
