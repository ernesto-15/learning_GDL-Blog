<?php

function productos_json(&$boletos, &$camisas = 0, &$etiquetas = 0) {
  $dias = ["un_dia", "pase_completo", "dos_dias"];
  $total_boletos = array_combine($dias, $boletos);
  $json = [];

  foreach ($total_boletos as $key => $boleto) {
    if((int) $boleto > 0) {
      $json[$key] = (int) $boleto;
    }
  }

  $camisas = (int) $camisas;
  if($camisas>0) {
    $json['camisas'] = $camisas;
  }

  $etiquetas = (int) $etiquetas;
  if($etiquetas>0) {
    $json['etiquetas'] = $etiquetas;
  }


  // return $json;
  return json_encode($json);

  // echo "<pre>";
  // var_dump($total_boletos);
  // echo "</pre>";
}

function eventos_json(&$eventos) {
  $eventos_json = [];
  foreach ($eventos as $evento) {
    $eventos_json['eventos'][] = $evento;
  }

  return json_encode(($eventos_json));
}

?>
