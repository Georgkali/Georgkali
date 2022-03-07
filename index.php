<?php
$originatorsReferences = [
    'Associated architects' => 'AAR'
];
$levelCodes = [
    'Below Ground' => 'BG',
    'Foundation' => 'FN',
    'Entrance Level' => '00',
    'Ground floor mezzanine' => '0M',
    'First floor' => '01',
    'First floor mezzanine'=> 'M1',
    'Second floor' => '02',
    'Third floor' => '03',
    'Fourth floor' => '04',
    'Fifth floor' => '05',
    'Sixth floor' => '06',
    'Multiple levels e.g. Sections' => 'ZZ',
    'No levels applicable' => 'XX'
];
$fileType = [

        'Animation file (of model)' => 'AF',
        'Combined model' => 'CM',
        'Specific for the clash process' => 'CR', 
'Agenda' => 'AG',
            'Bill of Quantities' => 'BQ',
            'Calculations' => 'QA'
    
];
$disciplineCodes = [
    'Architect' => 'A',
    'Building surveyor' => 'B'
];
$drawingNamingProt1 = [
    'General' => '0',
    'Substructure' => '1',
    'Superstructure' => '2'
];

$drawingNamingProt2 = [
    'General' => '0',
    'External walls' => '1',
    'Internal walls' => '2'
];

?>

<form action="get" action="/index.php">

<label for="job-number">Job number:</label>
<input type="text" name="job-number" required>

<br>
<br>

<label for="originators-references">Originators references:</label>
<select name="originators-references">
<?php foreach($originatorsReferences as $key => $value) {?>
<option value="<?php echo $value?>"><?php echo $key ?></option>
<?php }?>
</select>


<br>
<br>

<label for="plot-number">Plot number:</label>
<input type="text" name="plot-number" required>


<br>
<br>

<label for="level-codes">Level codes:</label>
<select name="level-codes">
<?php foreach($levelCodes as $key => $value) { ?>
<option value="<?php echo $value?>"><?php echo $key ?></option>
<?php }?>
</select>

<br>
<br>

<label for="file-type">File type:</label>
<select name="file-type">
<?php foreach($fileType as $key => $value) { ?>
<option value="<?php echo $value?>"><?php echo $key ?></option>
<?php }?>
</select>


<br>
<br>

<label for="discipline-codes">Discipline codes:</label>
<select name="discipline-codes">
<?php foreach($disciplineCodes as $key => $value) { ?>
<option value="<?php echo $value?>"><?php echo $key ?></option>
<?php }?>
</select>


<br>
<br>

<label for="naming-protocol1">Drawing naming protocol 1st digit:</label>
<select name="naming-protocol1">
<?php foreach($drawingNamingProt1 as $key => $value) { ?>
<option value="<?php echo $value?>"><?php echo $key ?></option>
<?php }?>
</select>


<br>
<br>

<label for="naming-protocol2">Drawing naming protocol 2nd digit:</label>
<select name="naming-protocol2">
<?php foreach($drawingNamingProt2 as $key => $value) { ?>
<option value="<?php echo $value?>"><?php echo $key ?></option>
<?php }?>
</select>


<br>
<br>

<button type="submit">Generate</button>
</form>

<?php 

function generateNumber() {

$get = $_GET;

echo $get['job-number']."-"
.$get['originators-references']."-"
.$get['plot-number']."-"
.$get['level-codes']."-"
.$get['file-type']."-"
.$get['discipline-codes']."-"
.$get['naming-protocol1']."-"
.$get['naming-protocol2'];
}

if(!empty($_GET)) {
    return generateNumber();
}

?>