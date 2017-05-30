<?php

namespace Foo\Bar;

include 'foo.php';

const FOO = 2;

function foo() {
    
}

class foo {

    static function staticmethod() {
        
    }

}

/* Nom non-qualifié */
foo(); // résolution en fonction Foo\Bar\foo
foo::staticmethod(); // résolution en classe Foo\Bar\foo, méthode staticmethod
echo FOO; // affiche 2

/* Nom qualifié */
subnamespace\foo(); // réolution en fonction Foo\Bar\subnamespace\foo
subnamespace\foo::staticmethod(); // résolution en classe Foo\Bar\subnamespace\foo,
// méthode staticmethod
echo subnamespace\FOO; // affiche 1

/* Nom qualifié complet */
\Foo\Bar\foo(); // résolution en fonction Foo\Bar\foo
\Foo\Bar\foo::staticmethod(); // résolution en classe Foo\Bar\foo, méthode staticmethod
echo \Foo\Bar\FOO; // affiche 2
