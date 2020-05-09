<?php

class Display 
{
    public static function show($formatter, $string)
    {
        // var_dump (get_class($formatter));
        // var_dump (class_implements($formatter));
        // var_dump(get_class_methods($formatter));
        // var_dump ($string);

        if (in_array('Renderable',class_implements($formatter))){
            $formatter->render($string);
        } 
        elseif (in_array('Formatter',class_implements($formatter))){
            $formatter->format($string);
        }elseif(in_array('format',get_class_methods($formatter))){
            $formatter->format($string);
        }
        else{
            echo "просто $string т.к. ничего нет<hr>";
        }
    }
}