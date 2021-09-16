<!DOCTYPE html>

<html>

<head>

    <title>Hi</title>

</head>

<body>

    <style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      overflow:hidden;padding:20px 20px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      font-weight:normal;overflow:hidden;padding:20px 20px;word-break:normal;}
    .tg .tg-baqh{text-align:center;vertical-align:top}
    .tg .tg-wp8o{border-color:#000000;text-align:center;vertical-align:top}
    .tg .tg-xwyw{border-color:#000000;text-align:center;vertical-align:middle}
    .tg .tg-73oq{border-color:#000000;text-align:left;vertical-align:top}
    </style>
    <table class="tg">
    <thead>
      <tr>
        <th class="tg-xwyw" rowspan="2">
            <img src="{{public_path().'imagenes/Logo.png'}}" alt="" width="200px">
            <br>
        </th>
        <th class="tg-baqh" colspan="2" rowspan="2"><span style="font-weight:bold">CERTIFICADO Y TÍTULO DE PROPIEDAD</span><br><br>Myeart, certifica la autenticidad y propiedad de la obra detallada a continuación</th>
      </tr>
      <tr>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="tg-wp8o" colspan="2">
            <img src="{{public_path() . $image_location}}" alt="">
            <br>
        </td>
        <td class="tg-73oq">

            <span style="font-weight:bold">Autor: </span>{{$buy->artwork->seller->user->profile->firstName}} {{$buy->artwork->seller->user->profile->lastName}}<br>
                        <span style="font-weight:bold">Nombre: </span>{{$buy->artwork->name}}<br>
                        <span style="font-weight:bold">Categoría: </span>{{$buy->artwork->category->name}}<br>
                        <span style="font-weight:bold">Descripción: </span>{{$buy->artwork->description}}<br>
                        <span style="font-weight:bold">Propietario: </span>{{$buy->user->profile->firstName}} {{$buy->user->profile->lastName}}</td>
                    </td>

      </tr>
    </tbody>
    </table>




</body>

</html>
