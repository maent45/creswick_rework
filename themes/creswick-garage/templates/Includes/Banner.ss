<section id="$ID" class="banner col-lg-12">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <% loop $BannerImages %>
                <div class="item<% if $Pos=1 %> active<% else %><% end_if %>">
                    $Banner_image
                    <% if $Banner_content %>
                        <div class="carousel-caption">
                            $Banner_content
                        </div>
                    <% end_if %>
                </div>
            <% end_loop %>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
