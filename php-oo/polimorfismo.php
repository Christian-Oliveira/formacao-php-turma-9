<?php

class Animal {
    public function som() {
        return 'som do animal';
    }
}

class Cachorro extends Animal {
    public function som() {
        return 'som do cachorro';
    }
}

class Gato extends Animal {
    public function som() {
        return 'som do gato';
    }
}

$animal = new Gato();
print $animal->som();