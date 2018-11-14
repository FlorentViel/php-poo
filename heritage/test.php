<?php



class MaClassParent {
    public function faitUneChose()
    {
        return "Fait une chose...<br>";
    }

    protected function faitUnTrucSecret()
    {
        return "Je fait des trucs secret... <br>";
    }
}

class MaClassEnfant extends MaClassParent {
    public function faitAutreChose()
    {
        return "Fait autre chose... <br>";
    }
    // public function faitUnTrucSecretHeriteDuParent()
    // {
    //     echo "blablabla <br>";
    //     return parent::faitUnTrucSecret();
    // }
}

$parent = new MaClassParent;
echo $parent->faitUneChose();
// $parent->faitAutreChose();



$enfant = new MaClassEnfant;
echo $enfant->faitUneChose();
echo $enfant->faitAutreChose();
echo $enfant->faitUnTrucSecret();
