<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Importar-Exportar</title>
    <link rel="preload" href="/resources/css/app.css" as="style">
    <link href="/resources/css/app.css" rel="stylesheet">
</head>
<body>
   <h1>IMPORTAR DATOS</h1>
    <form action="{{url('estudiante/importar')}}" method="POST" enctype="multipart/form-data">
      <input type="file" name="documento">
      <button>importar</button>
      <H1>La negra hace 2 x 1 harry!!!!</H1>
    </form>  
</body>
</html>