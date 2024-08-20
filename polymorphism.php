<?php  
interface canEat{
    function eat();
}

interface canSleep{
    function sleep();
}

interface canFly{
    function fly();
}

interface canTalk{

}

interface canSwim{
    function swim();
}

class Human implements canEat, canSleep, canSwim {
    function eat(){
        echo "Human can eat \n";
    }

    function sleep(){
        echo "Human can sleep \n";
    }

    function swim(){
        echo "Human can swim \n";
    }
}
class Bird implements canEat, canSleep, canFly, canTalk {
    function eat(){
        echo "Bird can eat \n";
    }

    function sleep(){
        echo "Bird can sleep \n";
    }

    function fly(){
        echo "Bird can fly \n";
    }
}

class Fish implements canEat, canSleep, canSwim {
    function eat(){
        echo "Fish can eat \n";
    }

    function sleep(){
        echo "Fish can sleep \n";
    }

    function swim(){
        echo "Fish can swim \n";
    }
}

$human = new Human();
$bird = new Bird();
$fish = new Fish();

function canYouSwim(canSwim $object){
    echo $object->swim();
}


canYouSwim($human);
// canYouSwim($bird);
canYouSwim($fish);