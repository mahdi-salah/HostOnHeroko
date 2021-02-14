
<script type="text/javascript" src="{{ URL::asset('/js/jquery-3.3.1.min.js') }}"></script>
<script>
    $(document).ready(function () {
        function loadLink(){
            clearInterval(stop);
            $('#refresh').load('/getData');
            console.log('TESTING!!!!');
        }
        let stop = setInterval(() => {
            loadLink()
        }, 30000);
    });
</script>

<?php
use Illuminate\Support\Facades\Http;
$response = Http::get('http://109.224.53.140/vueips.php')->body();
$data = json_decode($response, true);
$points = $data['d'];

$d_4041 = $points['d_4041'];
$d_4042 = $points['d_4042'];
$d_4043 = $points['d_4043'];
$d_4044 = $points['d_4044'];
$d_4045 = $points['d_4045'];
$d_4046 = $points['d_4046'];
$d_4047 = $points['d_4047'];
$d_4048 = $points['d_4048'];
$d_4049 = $points['d_4049'];
$d_4032 = $points['d_4032'];
?>


<div id="refresh">
    <section class="mt-5 container-fluid px-5 px-sm-0 w-sm-75 w-md-75 w-lg-50">
        <!--start table-->
        <table class="table table-hover table-dark text-center rounded-lg overflow-hidden">
            <thead>
            <tr class="myBgColor">
                <th colspan="2"><h4>RMIG</h4></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><h6>G1</h6></td>
                <td><h6><?php echo $d_4041 ?></h6></td>
            </tr>
            <tr>
                <td><h6>G2</h6></td>
                <td><h6><?php echo $d_4042 ?></h6></td>
            </tr>
            <tr>
                <td><h6>G3</h6></td>
                <td><h6><?php echo $d_4043 ?></h6></td>
            </tr>
            <tr>
                <td><h6>G4</h6></td>
                <td><h6><?php echo $d_4044 ?></h6></td>
            </tr>
            <tr>
                <td><h6>G5</h6></td>
                <td><h6><?php echo $d_4045 ?></h6></td>
            </tr>
            <tr>
                <td><h6>G6</h6></td>
                <td><h6><?php echo $d_4046 ?></h6></td>
            </tr>
            <tr>
                <td><h6>G7</h6></td>
                <td><h6><?php echo $d_4047 ?></h6></td>
            </tr>
            <tr>
                <td><h6>G8</h6></td>
                <td><h6><?php echo $d_4048 ?></h6></td>
            </tr>
            <tr>
                <td><h6>G9</h6></td>
                <td><h6><?php echo $d_4049 ?></h6></td>
            </tr>
            </tbody>
            <tfoot>
            <tr class="myBgColor">
                <th class="text-right pr-5"><h4>Total</h4></th>
                <th class="text-left pl-5"><h4><?php echo $d_4032 ?></h4></th>
            </tr>
            </tfoot>
        </table>
        <!--end table-->
    </section>

</div>


<style>
    h6 {font-size:1.15rem;}
    .myBgColor{
        background-color: #2d3339;
    }
</style>
