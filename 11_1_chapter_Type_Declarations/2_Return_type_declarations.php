<?php
// Return type declarations
function f(): array {
  return [];
}

interface I {
  static function myArray(array $a): array;
}

class C implements I {
  static function myArray(array $a): array {
    return $a;
  }
}