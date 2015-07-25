<h4>Shortcodes</h4>
<p>Celery introduces several shortcodes to help you run your preorder campaign.
<style>
#celery-shortcodes
{
  
}
#celery-shortcodes td
{
  vertical-align: top;
  text-align: left;
}
#celery-shortcodes td p
{
  margin-top: 0px;
}
</style>
<table id='celery-shortcodes' class="widefat fixed">
  <tr>
    <th>Code</th>
    <th>Description</th>
    <th>Options</th>
    <th>Example</th>
  </tr>
  <tr>
    <td>celery-button</td>
    <td>The easiest way to add Celery to your site. Render a &lt;button&gt; to pop up the Celery preorder overlay.</td>
    <td>
      <p>Any attributes supplied are passed through as HTML attributes.
      <p><b>slug</b> - The product slug you desire to use (defaults to product slug defined in this settings page).
    </td>
    <td>[celery-button style="font-face: Arial" slug="my-store-slug"]</td>
  </tr>
  <tr>
    <td>celery-inline</td>
    <td>Another very easy option to use Celery. This shows a Celery checkout on your page inline with your content.</td>
    <td>
      <p><b>slug</b> - The product slug you desire to use (defaults to product slug defined in this settings page).
    </td>
    <td>[celery-inline slug="my-store-slug"]</td>
  </tr>
  <!--
  <tr>
    <td>celery-progress</td>
    <td>Show a Celery progress bar for this preorder campaign.</td>
    <td>
      <p><b>slug</b> - The product slug you desire to use (defaults to product slug defined in this settings page).
      <p><b>width</b> - The progress bar width, in pixels (default: 200).
    </td>
    <td>[celery-progress slug="my-store-slug"]</td>
  </tr>
  <tr>
    <td>celery-connect</td>
    <td>For advanced users with HTML knowledge: connect the Celery overlay popup to an existing HTML element.</td>
    <td>
      <p><b>slug</b> - The product slug you desire to use (defaults to product slug defined in this settings page).
      <p><b>selector</b> - The jQuery selector used to find this element. Typically a CSS class or element ID.
    </td>
    <td>[celery-connect slug="my-store-slug" selector="#my_button_element"]</td>
  </tr>
  -->
</table>