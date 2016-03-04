<section id="$ID" class="services col-lg-12">
    <div class="container">
        <h1 class="services_header">$Section_title</h1>

        <div class="col-lg-12">
            <div class="col-lg-3 hidden-sm hidden-xs services_left">
                <% loop $Services %>
                    <h1 id="$ID" class="services_left_title">$Service_title</h1>
                <% end_loop %>
            </div>

            <div class="col-lg-4 col-lg-offset-1 services_middle">
                <% loop $Services %>
                    <div id="$ID" class="services_middle_detail">
                        <h1>$Service_title</h1>
                        <span>$Service_details</span>
                    </div>
                <% end_loop %>
            </div>

            <div class="col-lg-3 col-lg-offset-1 services_right">
                <% loop $Services %>
                    <div class="col-lg-12 services_points_wrapper" id="$ID">
                        <% loop $ServicePoints %>
                            <span id="$ServicesPageObjectsID" class="services_right_info">
                                <ul id="scroll-bar-style">
                                    <li>$Service_covered</li>
                                </ul>
                            </span>
                        <% end_loop %>
                    </div>
                <% end_loop %>
            </div>
        </div>
    </div>
</section>