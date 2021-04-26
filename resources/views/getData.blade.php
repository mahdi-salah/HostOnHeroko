
<script>
    $(document).ready(function () {
        function loadLink(){
            clearInterval(stop);
            $('#refresh').load('/getData');
            console.log('TESTING!!!!');
        }
        let stop = setInterval(() => {
            loadLink()
        }, 5000);
    });
</script>

<?php
use Illuminate\Support\Facades\Http;
$response = Http::get('https://gdoco.org/vueips.php')->body();   // http://109.224.53.140/vueips.php
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
//$d_4032 = $points['d_4032'];
?>


{{--<div id="refresh">--}}
{{--    <section class="mt-4 container-fluid px-5 px-sm-0 w-sm-75 w-md-75 w-lg-50">--}}
{{--        <!--start table-->--}}
{{--        <table class="table shadow-lg table-hover table-sm table-dark text-center rounded-lg overflow-hidden">--}}
{{--            <thead>--}}
{{--            <tr class="myBgColor">--}}
{{--                <th colspan="2" class="pt-2 pb-0"><h4>Gen. Units</h4></th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--                <td><h6>GTG1</h6></td>--}}
{{--                <td><h6><?php echo $d_4041 ?></h6></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td><h6>GTG2</h6></td>--}}
{{--                <td><h6><?php echo $d_4042 ?></h6></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td><h6>GTG3</h6></td>--}}
{{--                <td><h6><?php echo $d_4043 ?></h6></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td><h6>GTG4</h6></td>--}}
{{--                <td><h6><?php echo $d_4044 ?></h6></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td><h6>GTG5</h6></td>--}}
{{--                <td><h6><?php echo $d_4045 ?></h6></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td><h6>GTG6</h6></td>--}}
{{--                <td><h6><?php echo $d_4046 ?></h6></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td><h6>STG7</h6></td>--}}
{{--                <td><h6><?php echo $d_4047 ?></h6></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td><h6>STG8</h6></td>--}}
{{--                <td><h6><?php echo $d_4048 ?></h6></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td><h6>STG9</h6></td>--}}
{{--                <td><h6><?php echo $d_4049 ?></h6></td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--            <tfoot>--}}
{{--            <tr class="myBgColor">--}}
{{--                <td class="text-right pr-5 pt-2 pb-0"><h4>Total</h4></td>--}}
{{--                <td class="text-left pl-5 pt-2 pb-0"><h4><?php echo $d_4041 + $d_4042 + $d_4043 + $d_4044 + $d_4045 + $d_4046 + $d_4047 + $d_4048 + $d_4049 ?></h4></td>--}}
{{--            </tr>--}}
{{--            </tfoot>--}}
{{--        </table>--}}
{{--        <!--end table-->--}}
{{--    </section>--}}

{{--</div>--}}



<div id="refresh">
    <section class="mt-4 container-fluid px-5 px-sm-0 w-sm-75 w-md-75 w-lg-50">
        <!--start table-->
        <table class="table shadow-lg table-hover table-sm table-dark text-center rounded-lg overflow-hidden">
            <thead>
            <tr class="myBgColor">
                <th colspan="2" class="pt-2 pb-0"><h4>Gen. Units</h4></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><h6>GTG1</h6></td>
                <td><h6>145.1</h6></td>
            </tr>
            <tr>
                <td><h6>GTG2</h6></td>
                <td><h6>144</h6></td>
            </tr>
            <tr>
                <td><h6>GTG3</h6></td>
                <td><h6>145</h6></td>
            </tr>
            <tr>
                <td><h6>GTG4</h6></td>
                <td><h6>146</h6></td>
            </tr>
            <tr>
                <td><h6>GTG5</h6></td>
                <td><h6>148</h6></td>
            </tr>
            <tr>
                <td><h6>GTG6</h6></td>
                <td><h6>150</h6></td>
            </tr>
            <tr>
                <td><h6>STG7</h6></td>
                <td><h6>0</h6></td>
            </tr>
            <tr>
                <td><h6>STG8</h6></td>
                <td><h6>0</h6></td>
            </tr>
            <tr>
                <td><h6>STG9</h6></td>
                <td><h6>0</h6></td>
            </tr>
            </tbody>
            <tfoot>
            <tr class="myBgColor">
                <td class="text-right pr-5 pt-2 pb-0"><h4>Total</h4></td>
                <td class="text-left pl-5 pt-2 pb-0"><h4><?php echo $d_4041 + $d_4042 + $d_4043 + $d_4044 + $d_4045 + $d_4046 + $d_4047 + $d_4048 + $d_4049 ?></h4></td>
            </tr>
            </tfoot>
        </table>
        <!--end table-->
    </section>

</div>



<style>
    h6 {font-size:1.05rem;}
    h4 {font-size:1.3rem;}
    .myBgColor{
        background-color: #2d3339;
    }
</style>
