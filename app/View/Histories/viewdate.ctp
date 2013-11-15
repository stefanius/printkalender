<?php
    $this->Html->addCrumb('Vandaag in het Verleden', '/historie');
    $this->Html->addCrumb($History['History']['year'], '/historie/'.$History['History']['year']);
    $this->Html->addCrumb($months[$History['History']['month']], '/historie/'.$History['History']['year'].'/'.$History['History']['month']);
    $this->Html->addCrumb($History['History']['day'].' '.$months[$History['History']['month']].' '.$year, '/historie/'.$History['History']['year'].'/'.$History['History']['month'].'/'.$History['History']['day']);
    $this->Html->addCrumb($History['History']['title'], '/historie/'.$History['History']['year'].'/'.$History['History']['month'].'/'.$History['History']['day'].'/'.$History['History']['urlpart']);
?>
<h1><?php echo $History['History']['title']; ?></h1>
<strong><?php echo $History['History']['day'].'/'.$History['History']['month'].'/'.$History['History']['year']; ?></strong>
<?php echo $History['History']['pagecontent']; ?>

<?php 

if(is_array($History['Marker'])){
    if(count($History['Marker']) > 0){
        echo '<h2>Op de Kaart</h2>';
        $lng=0.0;
        $lat=0.0;
        $divider=0;
        foreach($History['Marker'] as $M){
            $lat+=$M['lat'];
            $lng+=$M['lng'];
            $divider++;
        }
        
        $lng=$lng/$divider;
        $lat=$lat/$divider;
        echo $this->GoogleMap->map(array(
            'width' => '100%',
            'height' => '400px',
            'localize' => false,
            'marker' => false,
            'latitude' =>$lat,
            'longitude' => $lng,
            'zoom' => 10, 
            'custom'=>'disableDefaultUI:true'
        ));

        foreach($History['Marker'] as $M){
            $marker_options = array(
                'showWindow' => true,
                'windowText' => '<p><b>'.$M['title'].'</b></p><p>' .$M['description'].'</p>',
                'markerTitle' => $M['title'],
                'markerIcon' => 'http://labs.google.com/ridefinder/images/mm_20_purple.png',
                'markerShadow' => 'http://labs.google.com/ridefinder/images/mm_20_purpleshadow.png',
            ); 
            echo $this->GoogleMap->addMarker("map_canvas", $M['id'], array('latitude' => $M['lat'], 'longitude' => $M['lng']), $marker_options);
        }    
    }
}
?>