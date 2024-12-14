<?php
// Admin page HTML
function multi_viewer_admin_page() {
    ?>
<div class="wrap">
  <h1>3D Multi-Viewer Plugin</h1>
  <p>Embed and manage Spline and Sketchfab models directly on your site using shortcodes.</p>

  <h2>Instructions</h2>
  <ul>
    <li>To embed a Spline model, use:
      <code>[multiviewer type="spline" src="YOUR_MODEL_URL" width="100%" height="500px"]</code>
    </li>
    <li>To embed a Sketchfab model, use:
      <code>[multiviewer type="sketchfab" src="YOUR_MODEL_URL" background="#ffffff"]</code>
    </li>
  </ul>

  <h2>Shortcode Generator</h2>
  <form id="multi-viewer-form" method="post" action="">
    <table class="form-table">
      <tr>
        <th><label for="type">Model Type</label></th>
        <td>
          <select id="type" name="type" required>
            <option value="">Select Type</option>
            <option value="spline">Spline</option>
            <option value="sketchfab">Sketchfab</option>
          </select>
        </td>
      </tr>
      <tr>
        <th><label for="src">Model URL</label></th>
        <td>
          <input type="url" id="src" name="src" placeholder="https://example.com/model" required pattern="https?://.+">
          <p class="description">Enter the full URL of the model (e.g., https://example.com/model).</p>
        </td>
      </tr>
      <tr>
        <th><label for="width">Width</label></th>
        <td>
          <input type="text" id="width" name="width" value="100%" pattern="^[0-9]+(%|px)$">
          <p class="description">Enter width (e.g., "100%" or "500px").</p>
        </td>
      </tr>
      <tr>
        <th><label for="height">Height</label></th>
        <td>
          <input type="text" id="height" name="height" value="500px" pattern="^[0-9]+(%|px)$">
          <p class="description">Enter height (e.g., "500px").</p>
        </td>
      </tr>
      <tr>
        <th><label for="background">Background Color</label></th>
        <td>
          <input type="text" id="background" name="background" value="transparent">
          <p class="description">Enter a color (e.g., "transparent" or "#ffffff").</p>
        </td>
      </tr>
      <tr>
        <th><label for="border">Border</label></th>
        <td>
          <input type="text" id="border" name="border" value="none">
          <p class="description">Enter border style (e.g., "1px solid #000").</p>
        </td>
      </tr>
      <tr>
        <th><label for="shadow">Box Shadow</label></th>
        <td>
          <input type="text" id="shadow" name="shadow" value="none">
          <p class="description">Enter shadow style (e.g., "0px 4px 8px rgba(0, 0, 0, 0.2)").</p>
        </td>
      </tr>
      <tr>
        <th><label for="padding">Padding</label></th>
        <td>
          <input type="text" id="padding" name="padding" value="0" pattern="^[0-9]+(px|%)$">
          <p class="description">Enter padding (e.g., "10px" or "5%").</p>
        </td>
      </tr>
    </table>
    <p class="submit">
      <button type="button" id="generate-shortcode" class="button button-primary">Generate Shortcode</button>
    </p>
  </form>

  <h2>Generated Shortcode</h2>
  <textarea id="generated-shortcode" readonly style="width: 100%; height: 100px;"></textarea>

  <script>
  document.getElementById('generate-shortcode').addEventListener('click', function() {
    const type = document.getElementById('type').value;
    const src = document.getElementById('src').value;
    const width = document.getElementById('width').value || '100%';
    const height = document.getElementById('height').value || '500px';
    const background = document.getElementById('background').value || 'transparent';
    const border = document.getElementById('border').value || 'none';
    const shadow = document.getElementById('shadow').value || 'none';
    const padding = document.getElementById('padding').value || '0';

    if (!type || !src) {
      alert('Please fill in all required fields.');
      return;
    }

    const shortcode =
      `[multiviewer type="${type}" src="${src}" width="${width}" height="${height}" background="${background}" border="${border}" shadow="${shadow}" padding="${padding}"]`;
    document.getElementById('generated-shortcode').value = shortcode;
  });
  </script>
</div>
<?php
}

// Add admin menu
function multi_viewer_add_admin_menu() {
    add_menu_page(
        '3D Multi-Viewer',
        '3D Multi-Viewer',
        'manage_options',
        'multi-viewer',
        'multi_viewer_admin_page',
        'dashicons-format-gallery'
    );
}
add_action('admin_menu', 'multi_viewer_add_admin_menu');