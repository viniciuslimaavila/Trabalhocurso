<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Provedor</title>
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body>
<header class="bg-violet-800">
        <ul class="flex">
            <li
             class="mx-3">
                <a href="../../index.html">Home</a>
            </li>
<li>
    <a href="#">Email</a>
</li>
        </ul>

    
    </header>
    <main class="mt-4 ml-4">
        <form action="../Controller/Provider.php" method="POST">
            <section class="columns-3">
            <article>
<label for="Email" >Email:</label>
<input type="email" id="email" name="email" class="border border-blue-400">
</article>

<article>
<label for="contato" >Adicionar Contato:</label>
<input type="text" id="contato" name="contato" class="border border-blue-400" min=1 max=100 placeholder = "00000-0000">
</article>

<label for="CNPJ" >CNPJ:</label>
<input type="text" id="CNPJ" name="CNPJ" class="border border-blue-400" min=1 max=100>

<label for="Nome" >Nome:</label>
<input type="text" id="Nome" name="Nome" class="border border-blue-400">

</article>

</section>
            <article class="flex justify-center mt-4">
                <button type="submit" class="rounded p-4 bg-blue-700 text-white">Cadastrar</button>

</body>
</html>
