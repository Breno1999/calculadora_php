<?php

    class Operacoes{

        

        public function somar($n1, $n2){

            $num1 = intval($n1);
            $num2 = intval($n2);
            $resultado = $num1 + $num2;

            return $resultado;
        }   

        public function subtracao($n1, $n2){

            $num1 = intval($n1);
            $num2 = intval($n2);
            $resultado = $num1 - $num2;

            return $resultado;
        }

        public function multiplicacao($n1, $n2){

            $num1 = intval($n1);
            $num2 = intval($n2);
            $resultado = $num1 * $num2;

            return $resultado;
        }

        public function divisao($n1, $n2){

            $num1 = intval($n1);
            $num2 = intval($n2);
            $resultado = $num1 / $num2;

            return $resultado;
        }
    }

?>