<?hh // partial
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the "hack" directory of this source tree.
 *
 *
 */

interface A {
  public function foo(): int;
}

class B<T> implements A {

  public function foo(): T {
    // UNSAFE
  }
}
