 <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="{{ asset('assets/js/init/weather-init.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="{{ asset('assets/js/init/fullcalendar-init.js') }}"></script>

    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('ckeditor', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    </script>

<!--  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(".add").click(function() {
    $("form > p:first-child").clone(true).insertBefore("form > p:last-child");
    return false;
});

$(".remove").click(function() {
    $(this).parent().remove();
});
</script>


<script type="text/javascript">
        function add_form()
        {
            var html = '';

            html += '<div>';
            html += '<div class="form-group"><label for="atribut" class="form-control-label">Atribut</label><input type="text" name="atribut[]" value="{{ old('atribut') }}" class="form-control @error('atribut')is-invalid @enderror" /> @error('atribut')<div class="text-muted">{{ $message }}</div>@enderror</div>';
            html += '<div class="form-group"><label for="type" class="form-control-label">Type</label><select name="type[]" id="type"  class="form-control @error('type')is-invalid @enderror"value="{{ old('type') }}"><option value="text">Text</option><option value="file">File</option><option value="checkbox">Checkbox</option><option value="radiobutton">Radiobutton</option></select>@error('type')<div class="text-muted">{{ $message }}</div>@enderror</div>';
            html += '<button type="button" class="btn btn-danger mb-4" onclick="del_form(this)">Remove</button>';
            html += '</div>';

            $('#form-body').append(html);
        }

        function del_form(id)
        {
            id.closest('div').remove();
        }
</script>