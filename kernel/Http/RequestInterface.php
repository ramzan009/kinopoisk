<?php

namespace App\Kernel\Http;

use App\Kernel\Validator\Validator;
use App\Kernel\Validator\ValidatorInterface;

interface RequestInterface
{
    public function uri(): string;

    public function method(): string;

    public function input(string $key, $default = null): mixed;

    public function setValidator(ValidatorInterface $validator): void;

    public function validate(array $rules): bool;

    public function error(): array;
}