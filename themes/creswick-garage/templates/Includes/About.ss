<section id="$ID" class="about col-lg-12">
    <div class="container">
        <h1 class="about_header">$Section_title</h1>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <% loop $AboutDetails %>
                <span id="$ID" class="about_info_details">
                    $Info_details
                </span>
            <% end_loop %>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <% loop $AboutDetails %>
                <span id="$ID" class="about_img_wrapper">$Info_image</span>
            <% end_loop %>
        </div>
    </div>
</section>