<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $tipo = $_POST["tipo"];
    $gen = $_POST["genero"];
    $tam = $_POST["tamanho"];
    $obra = "";
    $desc = "";

    if ($tipo == "Anime" && $gen == "Ação" && $tam == "Curtas"){
        $obra = "One Punch Man";
        $desc = "Ação, humor e muitas batalhas";
    }elseif ($tipo == "Anime" && $gen == "Ação" && $tam == "Longas"){
        $obra = "Attack on Titan";
        $desc = "Ação, mistério e muita emoção";
    }elseif ($tipo == "Anime" && $gen == "Romance" && $tam == "Curtas"){
        $obra = "Tsuki ga Kirei";
        $desc = "Romance adolescente e momentos fofos";
    }elseif ($tipo == "Anime" && $gen == "Romance" && $tam == "Longas"){
        $obra = "Your Lie in April";
        $desc = "Romance, música e emoção";
    }elseif ($tipo == "Anime" && $gen == "Fantasia" && $tam == "Longas"){
        $obra = "Fullmetal Alchemist";
        $desc = "Aventura, alquimia e muita ação";
    }elseif ($tipo == "Anime" && $gen == "Fantasia" && $tam == "Curtas"){
        $obra = "Frieren";
        $desc = "Fantasia, aventura e uma bela história";
    }
    
    elseif ($tipo == "Mangá" && $gen == "Ação" && $tam == "Curtas"){
        $obra = "Demon Slayer";
        $desc = "Caçador de demônios";
    }elseif ($tipo == "Mangá" && $gen == "Ação" && $tam == "Longas"){
        $obra = "One Piece";
        $desc = "Aventuras, piratas e muitas batalhas";
    }elseif ($tipo == "Mangá" && $gen == "Romance" && $tam == "Curtas"){
        $obra = "Kaguya-sama";
        $desc = "Romance, comédia e muita confusão";
    }elseif ($tipo == "Mangá" && $gen == "Romance" && $tam == "Longas"){
        $obra = "Nana";
        $desc = "Romance, amizade e drama";
    }elseif ($tipo == "Mangá" && $gen == "Fantasia" && $tam == "Longas"){
        $obra = "Berserk";
        $desc = "Fantasia sombria, ação e batalhas";
    }elseif ($tipo == "Mangá" && $gen == "Fantasia" && $tam == "Curtas"){
        $obra = "Death Note";
        $desc = "Mistério, estratégias e poderes";
    }

    elseif ($tipo == "Livro" && $gen == "Ação" && $tam == "Curtas"){
        $obra = "Androides sonham com Ovelhas Elétricas?";
        $desc = "Ação, robôs e distopia";
    }elseif ($tipo == "Livro" && $gen == "Ação" && $tam == "Longas"){
        $obra = "As Crônicas de Nárnia";
        $desc = "Aventuras, ação e muitas batalhas";
    }elseif ($tipo == "Livro" && $gen == "Romance" && $tam == "Curtas"){
        $obra = "O Pequeno Príncipe";
        $desc = "Uma história sobre amizade e amor";
    }elseif ($tipo == "Livro" && $gen == "Romance" && $tam == "Longas"){
        $obra = "Orgulho e Preconceito";
        $desc = "Romance clássico com personagens marcantes";
    }elseif ($tipo == "Livro" && $gen == "Fantasia" && $tam == "Longas"){
        $obra = "Harry Potter";
        $desc = "Magia, amizade e muita aventura";
    }elseif ($tipo == "Livro" && $gen == "Fantasia" && $tam == "Curtas"){
        $obra = "O Hobbit";
        $desc = "Aventura, fantasia e dragões";
    }
    else{
        $obra = "Azumanga Daioh";
        $desc = "Um anime fofo e humorado para alegrar seu dia!";
    }
}
else{
    header("Location: index.html");
    exit;
}
?>