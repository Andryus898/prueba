<?php
trait Hola {
    public function decirHola() {
        echo 'Hola ';
    }
}

trait Mundo {
    public function decirMundo() {
        echo 'Mundo!';
    }
}

trait HolaMundo {
    use Hola, Mundo;
}

class MiHolaMundo {
    use HolaMundo;
}

$o = new MiHolaMundo();
$o->decirHola();
$o->decirMundo();
?>