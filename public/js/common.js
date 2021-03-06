$(document).ready(function () {
    // Define function to open filemanager window
    var lfm = function (options, cb) {
        var isMobile = false; //initiate as false
        if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
            || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
            isMobile = true;
        }

        var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';

        if (isMobile) {
            window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=' + window.screen.width + ',height=400, left=0 top=100');
        } else {
            var top = window.screen.height - 600;
            top = top > 0 ? top / 2 : 0;
            var left = window.screen.width - 900;
            left = left > 0 ? left / 2 : 0;

            window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600, top=' + top + ',left=' + left + '');
        }

        window.SetUrl = cb;
    };

    // Define LFM summernote button
    var LFMButton = function (context) {
        var ui = $.summernote.ui;
        var button = ui.button({
            contents: '<i class="note-icon-picture"></i> ',
            tooltip: 'Insert image with filemanager',
            click: function () {
                lfm({type: 'image', prefix: '/filemanager'}, function (imageUrl, path) {
                    context.invoke('insertImage', imageUrl);
                });

            }
        });
        return button.render();
    };

    // Initialize summernote with LFM button in the popover button group
    // Please note that you can add this button to any other button group you'd like
    $('.summernote').summernote({
        height: 250,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['table', ['table']],
            ['insert', ['link', 'lfm', 'hr']],
            ['view', ['fullscreen', 'codeview']],
            ['help', ['help']]
        ],
        buttons: {
            lfm: LFMButton
        },
        popover: {
            image: [],
            link: [],
            air: []
        }
    });

    $('#btn-add-prod-thumbnail, #prod-thumbnail').on('click', function(event){
        event.preventDefault();

        lfm({type: 'image', prefix: '/filemanager'}, function (imageUrl, path) {
            $('#btn-add-prod-thumbnail').css('display', 'none');
            $('#set-post-thumbnail-desc').css('display', 'block');
            $('#remove-post-thumbnail').parent().css('display', 'block');
            $('#prod-thumbnail').attr('src', imageUrl);
            $('#prod-thumbnail').css('display', 'block');
        });
    });

    var img_count = 0;
    $('#btn-add-prod-images').on('click', function(event){
        event.preventDefault();

        img_count++;

        lfm({type: 'image', prefix: '/filemanager'}, function (imageUrl, path) {
            var html = '<li class="image" id="img-'+img_count+'"><div><img src="'+imageUrl+'"> <ul class="actions"><li><a href="#" data-id="img-'+img_count+'" class="delete" title="Xóa ảnh"><i class="fa fa-fw fa-times-circle"></i></a></li></ul> </div></li>';
            $('#product_gallery_images').append(html);

            $('#product_gallery_images .actions .delete').on('click', function (event) {
                event.preventDefault();
                var id = $(this).attr('data-id');
                $('#' + id).remove();
            });
        });
    });

    $('#product_gallery_images .actions .delete').on('click', function (event) {
        event.preventDefault();
        $(this).parent().remove();
    });

    $('#remove-post-thumbnail').on('click', function (e) {
        e.preventDefault();

        $(this).parent().css('display', 'none');
        $('#prod-thumbnail').css('display', 'none');
        $('#set-post-thumbnail-desc').css('display', 'none');
        $('#btn-add-prod-thumbnail').css('display', 'block');
    });
});

$(document).ready(function () {
    // Select2
    $("#product_vendor").select2({
        tags: true
    });

    $("#product_tags").select2({
        tags: true
    });

    // Product gallery images
    let product_gallery_images = document.getElementById('product_gallery_images');
    new Sortable(product_gallery_images, {
        swapThreshold: 1,
        animation: 150
    });
});
