{include file='_head.tpl'}
{include file='_header.tpl'}

{if $view == ""}
  <!-- page header -->
{/if}


<!-- page content -->
<div class="{if $system['fluid_design']}container-fluid{else}container{/if} mt20 sg-offcanvas">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-md-none sg-offcanvas-sidebar">
      {include file='_sidebar.tpl'}
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 sg-offcanvas-mainbar">
      <div class="blogs-wrapper">
        {if $fundings}
          <ul class="row">
            <!-- fundings -->
            {foreach $fundings as $funding}
              {include file='__feeds_funding.tpl' _iteration=$funding@iteration}
            {/foreach}
            <!-- fundings -->
          </ul>

          <!-- see-more -->
          <div class="alert alert-post see-more js_see-more" data-get="fundings">
            <span>{__("More Funding")}</span>
            <div class="loader loader_small x-hidden"></div>
          </div>
          <!-- see-more -->
        {else}
          {include file='_no_data.tpl'}
        {/if}
      </div>
    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

{include file='_footer.tpl'}