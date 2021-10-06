<script src="//kit.fontawesome.com/aa028fd33c.js" crossorigin="anonymous"></script>
<script src="{{url('public')}}/js/jquery.min.js"></script>
{{-- <script src="{{url('public')}}/js/isotope.min.js"></script> --}}
<script src="{{url('public')}}/js/countto.js"></script>
<script src="{{url('public')}}/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
@if(strpos(url()->current(), 'admin'))
  {{-- Admin Only Scripts --}}
  <script type="text/javascript" src="{{url('public')}}/datatables/datatables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="//cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="{{url('public')}}/js/tinymce/tinymce.min.js"></script>
  <script type="text/javascript" src="{{url('public')}}/js/admin.js"></script>
@endif
<script src="{{url('public')}}/js/owl.carousel.min.js"></script>
<script src="{{url('public')}}/js/dropzone.min.js"></script>
<script src="{{url('public')}}/js/dropzone-amd-module.min.js"></script>
<script src="{{url('public')}}/js/app.js?v=0.3"></script>
