<% loop $Children %>
    <% if $ClassName = "BannerPage" %>
        <% include Banner %>
    <% end_if %>
    <% if $ClassName = "ServicesPage" %>
        <% include Services %>
    <% end_if %>
    <% if $ClassName = "AboutPage" %>
        <% include About %>
    <% end_if %>
<% end_loop %>
