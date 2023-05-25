<script src="  {{asset("assetAdmin/src/bootstrap/js/bootstrap.bundle.min.js")}} "></script>
<script src="  {{asset("assetAdmin/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js")}} "></script>
<script src="  {{asset("assetAdmin/src/plugins/src/mousetrap/mousetrap.min.js")}} "></script>
<script src="  {{asset("assetAdmin/src/plugins/src/waves/waves.min.js")}} "></script>
<script src="  {{asset("assetAdmin/layouts/horizontal-dark-menu/app.js")}} "></script>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="  {{asset("assetAdmin/src/plugins/src/editors/quill/quill.js")}} "></script>
<script src="  {{asset("assetAdmin/src/plugins/src/filepond/filepond.min.js")}} "></script>
<script src="  {{asset("assetAdmin/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js")}} "></script>
<script src="  {{asset("assetAdmin/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js")}} "></script>
<script src="  {{asset("assetAdmin/src/plugins/src/filepond/FilePondPluginImagePreview.min.js")}} "></script>
<script src="  {{asset("assetAdmin/src/plugins/src/filepond/FilePondPluginImageCrop.min.js")}} "></script>
<script src="  {{asset("assetAdmin/src/plugins/src/filepond/FilePondPluginImageResize.min.js")}} "></script>
<script src="  {{asset("assetAdmin/src/plugins/src/filepond/FilePondPluginImageTransform.min.js")}} "></script>
<script src="  {{asset("assetAdmin/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js")}} "></script>

<script src="  {{asset("assetAdmin/src/plugins/src/tagify/tagify.min.js")}} "></script>

<script src="  {{asset("assetAdmin/src/assets/js/apps/blog-create.js")}} "></script>

@include('sweetalert::alert')
@stack('js')
