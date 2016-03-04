<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar_contact_holder">
        <% with $SiteConfig %>
            <div class="container">
                <i class="fa fa-mobile"></i><p>$Phone_number</p>
                <i class="fa fa-envelope"></i><p>$Email</p>
            </div>
        <% end_with %>
    </div>
    <div class="container-fluid container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="$BaseURL">
                <% with $SiteConfig %>
                    <% if $Nav_logo %>
                        $Nav_logo
                    <% else %>
                        no logo uploaded
                    <% end_if %>
                <% end_with %>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <% loop $Menu(1) %>
                    <li class="$LinkingMode"><a href="$Link" title="$Title">$MenuTitle</a></li>
                <% end_loop %>
                <% if $Menu(2) %>
                    <% loop $Menu(2) %>
                        <li class="$LinkingMode $ClassName"><a href="#$ID" title="$Title">$MenuTitle</a></li>
                    <% end_loop %>
                <% end_if %>
            </ul>
        </div>
    </div>
</nav>