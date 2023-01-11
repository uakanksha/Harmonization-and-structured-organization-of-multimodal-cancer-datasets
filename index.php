<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Breast Cancer Database</title>   
     <style>
        .dataTables_wrapper{
            width :70% ; margin : auto ;
        }
    </style>   
</head>   
    <div class = "a">
    <h1>Breast Cancer Database</h1>
   
    <?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "BREASTdb";
    $connect=mysqli_connect($server,$user,$password,$db);

        if(!$connect){
            die("ERROR: cannot connect to database $db on server $server 
            using username $user(".mysqli_connect_errno().
            ", ".mysqli_connect_error().")");
        } else {
            ECHO "CONNECTION ESTABLISHED";}

        $GENE_NAME  =$_POST['GENE_NAME'];
        echo $_POST['GENE_NAME'];
        $ACCESSION_NUMBER  =isset ($_POST['ACCESSION_NUMBER']);
        $GENE_CDS_LENGTH   = isset ($_POST['GENE_CDS_LENGTH']);
        $HGNC_ID  = isset ($_POST['HGNC_ID']);
        $SAMPLE_NAME  = isset ($_POST['SAMPLE_NAME']);
        $ID_SAMPLE  = isset ($_POST['ID_SAMPLE']);
        $ID_TUMOUR  = isset ($_POST['ID_TUMOUR']);
        $SITE_SUBTYPE_1  = isset ($_POST['SITE_SUBTYPE_1']);
        $SITE_SUBTYPE_2  = isset ($_POST['SITE_SUBTYPE_2']);
        $SITE_SUBTYPE_3  = isset ($_POST['SITE_SUBTYPE_3']);
        $PRIMARY_HISTOLOGY  = isset ($_POST['PRIMARY_HISTOLOGY']);
        $HISTOLOGY_SUBTYPE_1  =ISSET ($_POST['HISTOLOGY_SUBTYPE_1']);
        $HISTOLOGY_SUBTYPE_2  =ISSET ($_POST['HISTOLOGY_SUBTYPE_2']);
        $HISTOLOGY_SUBTYPE_3  =ISSET ($_POST['HISTOLOGY_SUBTYPE_3']);
        $GENOME_WIDE_SCREEN  =ISSET ($_POST['GENOME_WIDE_SCREEN']);
        $GENOMIC_MUTATION_ID  = isset ($_POST['GENOMIC_MUTATION_ID']);
        $LEGACY_MUTATION_ID  = isset ($_POST['LEGACY_MUTATION_ID']);
        $MUTATION_ID  = isset ($_POST['MUTATION_ID']);
        $MUTATION_CDS  = isset ($_POST['MUTATION_CDS']);
        $MUTATION_AA  = isset ($_POST['MUTATION_AA']);
        $MUTATION_DESCRIPTION  = isset ($_POST['MUTATION_DESCRIPTION']);
        $MUTATION_ZYGOSITY  = isset ($_POST['MUTATION_ZYGOSITY']);
        $LOH  = isset ($_POST['LOH']);
        $GRCH  = isset ($_POST['GRCH']);
        $MUTATION_GENOME_POSITION  = isset ($_POST['MUTATION_GENOME_POSITION']);
        $MUTATION_STRAND  = isset ($_POST['GMUTATION_STRANDENE_NAME']);
        $RESISTANCE_MUTATION  = isset ($_POST['RESISTANCE_MUTATION']);
        $MUTATION_SOMATIC_STATUS  = isset ($_POST['MUTATION_SOMATIC_STATUS']);
        $PUBMED_PMID  = isset ($_POST['PUBMED_PMID']);
        $ID_STUDY  = isset ($_POST['ID_STUDY']);
        $SAMPLE_TYPE  = isset ($_POST['SAMPLE_TYPE']);
        $TUMOUR_ORIGIN  = isset ($_POST['TUMOUR_ORIGIN']);
        $AGE  = isset ($_POST['AGE']);
        $HGVSP  =isset ($_POST['HGVSP']);
        $HGVSC  =isset ($_POST['HGVSC']);
        $HGVSG  =isset ($_POST['HGVSG']);
        

        

        $sql ="SELECT * FROM BC_mutation_data where GENE_NAME='$GENE_NAME'";

        
        if ($result = mysqli_query($connect,$sql)){
            if (mysqli_num_rows($result)>0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>GENE_NAME</th>";
                echo "<th>ACCESSION NUMBER</th>";
                echo "<th>GENE_CDS_LENGTH</th>";
                echo "<th>HGNC_ID</th>";
                echo "<th>SAMPLE_NAME</th>";
                echo "<th>ID_SAMPLE</th>";
                echo "<th>ID_TUMOUR</th>";
                echo "<th>SITE_SUBTYPE_1</th>";
                echo "<th>SITE_SUBTYPE_2</th>";
                echo "<th>SITE_SUBTYPE_3</th>";
                echo "<th>PRIMARY_HISTOLOGY</th>";
                echo "<th>HISTOLOGY_SUBTYPE_1</th>";
                echo "<th>HISTOLOGY_SUBTYPE_2</th>";
                echo "<th>HISTOLOGY_SUBTYPE_3</th>";
                echo "<th>GENOME_WIDE_SCREEN</th>";
                echo "<th>GENOMIC_MUTATION_ID</th>";
                echo "<th>LEGACY_MUTATION_ID</th>";
                echo "<th>MUTATION_ID</th>";
                echo "<th>MUTATION_CDS</th>";
                echo "<th>MUTATION_AA</th>";
                echo "<th>MUTATION_DESCRIPTION</th>";
                echo "<th>MUTATION_ZYGOSITY</th>";
                echo "<th>LOH</th>";
                echo "<th>GRCH</th>";
                echo "<th>MUTATION_GENOME_POSITION</th>";
                echo "<th>MUTATION_STRAND</th>";
                echo "<th>RESISTANCE_MUTATION</th>";
                echo "<th>MUTATION_SOMATIC_STATUS</th>";
                echo "<th>PUBMED_PMID</th>";
                echo "<th>ID_STUDY</th>";
                echo "<th>SAMPLE_TYPE</th>";
                echo "<th>TUMOUR_ORIGIN</th>";
                echo "<th>AGE</th> ";
                echo "<th>HGVSP</th>";
                echo "<th>HGVSC</th>";
                echo "<th>HGVSG</th>";
                echo "</tr>";
            while ($row = mysqli_fetch_array ($result)){
                echo "<tr>";
                echo "<td>".$row ['GENE_NAME']."</td>.";
                echo "<td>".$row ['ACCESSION NUMBER']."</td>.";
                echo "<td>".$row ['GENE_CDS_LENGTH']."</td>.";
                echo "<td>".$row ['HGNC_ID']."</td>.";
                echo "<td>".$row ['SAMPLE_NAME']."</td>.";
                echo "<td>".$row ['ID_SAMPLE']."</td>.";
                echo "<td>".$row ['ID_TUMOUR']."</td>.";
                echo "<td>".$row ['SITE_SUBTYPE_1']."</td>.";
                echo "<td>".$row ['SITE_SUBTYPE_2']."</td>.";
                echo "<td>".$row ['SITE_SUBTYPE_3']."</td>.";
                echo "<td>".$row ['PRIMARY_HISTOLOGY']."</td>.";
                echo "<td>".$row ['HISTOLOGY_SUBTYPE_1']."</td>.";
                echo "<td>".$row ['HISTOLOGY_SUBTYPE_2']."</td>.";
                echo "<td>".$row ['HISTOLOGY_SUBTYPE_3']."</td>.";
                echo "<td>".$row ['GENOME_WIDE_SCREEN']."</td>.";
                echo "<td>".$row ['GENOMIC_MUTATION_ID']."</td>.";
                echo "<td>".$row ['LEGACY_MUTATION_ID']."</td>.";
                echo "<td>".$row ['MUTATION_ID']."</td>.";
                echo "<td>".$row ['MUTATION_CDS']."</td>.";
                echo "<td>".$row ['MUTATION_AA']."</td>.";
                echo "<td>".$row ['MUTATION_DESCRIPTION']."</td>.";
                echo "<td>".$row ['MUTATION_ZYGOSITY']."</td>.";
                echo "<td>".$row ['LOH']."</td>.";
                echo "<td>".$row ['GRCH']."</td>.";
                echo "<td>".$row ['MUTATION_GENOME_POSITION']."</td>.";
                echo "<td>".$row ['MUTATION_STRAND']."</td>.";
                echo "<td>".$row ['RESISTANCE_MUTATION']."</td>.";
                echo "<td>".$row ['MUTATION_SOMATIC_STATUS']."</td>.";
                echo "<td>".$row ['PUBMED_PMID']."</td>.";
                echo "<td>".$row ['ID_STUDY']."</td>.";
                echo "<td>".$row ['SAMPLE_TYPE']."</td>.";
                echo "<td>".$row ['TUMOUR_ORIGIN']."</td>.";
                echo "<td>".$row ['AGE']."</td>.";
                echo "<td>".$row ['HGVSP']."</td>.";
                echo "<td>".$row ['HGVSC']."</td>.";
                echo "<td>".$row ['HGVSG']."</td>.";
                echo "</tr>";
            } echo "</table>";
            mysqli_free_result($result);
            } else {
                echo "no records matching to your query were found.";
            }
        }
        $result = mysqli_query ($connect,$sql);

        
    ?>
    <body>
    </body>
</html>