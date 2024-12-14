<?php
// Admin page HTML
function multi_viewer_admin_page() {
    ?>
<div class="wrap" style="font-family: Arial, sans-serif; margin: 20px;">
  <h1 style="color: #0073aa; font-size: 2.5em;">3D Multi-Viewer Plugin</h1>
  <p style="font-size: 1.2em;">Embed and manage Spline and Sketchfab models directly on your site using shortcodes.</p>

  <!-- Instructions Section -->
  <div
    style="margin-top: 20px; padding: 20px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0,0,0,0.1); background: #f7f7f7;">
    <h2 style="color: #333; margin-bottom: 10px;">Instructions</h2>
    <ul style="margin-left: 20px; font-size: 1em; list-style-type: disc;">
      <li>To embed a Spline model, use:
        <code
          style="background: #eef; padding: 4px 8px; border-radius: 4px; font-family: monospace;">[multiviewer type="spline" src="YOUR_MODEL_URL" width="100%" height="500px"]</code>
      </li>
      <li>To embed a Sketchfab model, use:
        <code
          style="background: #eef; padding: 4px 8px; border-radius: 4px; font-family: monospace;">[multiviewer type="sketchfab" src="YOUR_MODEL_URL" background="#ffffff"]</code>
      </li>
    </ul>
  </div>

  <!-- Shortcode Generator Section -->
  <div
    style="margin-top: 20px; padding: 20px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0,0,0,0.1); background: #fff;">
    <h2 style="color: #333; margin-bottom: 10px;">Shortcode Generator</h2>
    <form id="multi-viewer-form" style="font-size: 1em;">
      <table class="form-table" style="width: 100%; border-spacing: 10px;">
        <tr>
          <th><label for="type">Model Type</label></th>
          <td>
            <select id="type" name="type" required
              style="width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
              <option value="">Select Type</option>
              <option value="spline">Spline</option>
              <option value="sketchfab">Sketchfab</option>
            </select>
          </td>
        </tr>
        <tr>
          <th><label for="src">Model URL</label></th>
          <td>
            <input type="url" id="src" name="src" placeholder="https://example.com/model" required
              style="width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
            <p class="description">Enter the full URL of the model (e.g., a Spline or Sketchfab URL).</p>
            <p id="url-error" style="color: red; font-size: 0.9em; display: none;">Please enter a valid Spline or
              Sketchfab URL.</p>
          </td>
        </tr>
        <tr>
          <th><label for="width">Width</label></th>
          <td>
            <input type="text" id="width" name="width" value="100%" pattern="^[0-9]+(%|px)$"
              style="width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
            <p class="description">Enter width (e.g., "100%" or "500px").</p>
          </td>
        </tr>
        <tr>
          <th><label for="height">Height</label></th>
          <td>
            <input type="text" id="height" name="height" value="500px" pattern="^[0-9]+(%|px)$"
              style="width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
            <p class="description">Enter height (e.g., "500px").</p>
          </td>
        </tr>
        <tr>
          <th><label for="background">Background Color</label></th>
          <td style="position: relative;">
            <input type="color" id="background" name="background" value="#ffffff"
              style="padding: 10px; border-radius: 4px; border: 1px solid #ccc; display: block;">
            <div id="color-preview"
              style="margin-top: 10px; height: 50px; width: 100%; border-radius: 4px; background-color: #ffffff; box-shadow: inset 0px 0px 5px rgba(0,0,0,0.1);">
            </div>
            <p class="description">Choose a background color. Preview is shown above.</p>
          </td>
        </tr>
        <tr>
          <th><label for="border">Border</label></th>
          <td>
            <input type="text" id="border" name="border" placeholder="e.g., 1px solid #000" value="none"
              style="width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
            <p class="description">Specify border style (e.g., "1px solid #000").</p>
          </td>
        </tr>
        <tr>
          <th><label for="shadow">Shadow</label></th>
          <td>
            <input type="text" id="shadow" name="shadow" placeholder="e.g., 0px 4px 8px rgba(0,0,0,0.1)" value="none"
              style="width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
            <p class="description">Specify shadow style (e.g., "0px 4px 8px rgba(0,0,0,0.1)").</p>
          </td>
        </tr>
        <tr>
          <th><label for="padding">Padding</label></th>
          <td>
            <input type="text" id="padding" name="padding" placeholder="e.g., 10px" value="0"
              style="width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
            <p class="description">Specify padding (e.g., "10px").</p>
          </td>
        </tr>
      </table>
      <p class="submit" style="margin-top: 20px;">
        <button type="button" id="generate-shortcode" class="button button-primary"
          style="padding: 10px 20px; font-size: 1em;">Generate Shortcode</button>
      </p>
    </form>
  </div>

  <!-- Generated Shortcode Section -->
  <div
    style="margin-top: 20px; padding: 20px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0,0,0,0.1); background: #f9f9f9;">
    <h2 style="color: #333; margin-bottom: 10px;">Generated Shortcode</h2>
    <div style="position: relative; width: 100%;">
      <textarea id="generated-shortcode" readonly
        style="width: 100%; height: 100px; padding: 10px; border-radius: 4px; border: 1px solid #ccc; font-family: monospace;"></textarea>
      <button id="copy-shortcode"
        style="position: absolute; top: 5px; right: 5px; background: none; border: none; cursor: pointer;">
        <span class="dashicons dashicons-admin-page" style="font-size: 1.5em;"></span>
      </button>
    </div>
  </div>

  <!-- JavaScript for Interactions -->
  <script>
  document.getElementById('generate-shortcode').addEventListener('click', function() {
    const srcInput = document.getElementById('src');
    const url = srcInput.value.trim();
    const errorMessage = document.getElementById('url-error');

    const validUrlPattern = /^(https:\/\/)([a-zA-Z0-9-]+\.)?(spline|sketchfab)\.com/;

    if (!validUrlPattern.test(url)) {
      errorMessage.textContent = "Invalid URL. Please enter a URL from Spline or Sketchfab.";
    } else {
      errorMessage.textContent = "";
    }

    if (!validUrlPattern.test(url)) {
      errorMessage.style.display = 'block';
      srcInput.focus();
      return; // Prevent further execution if URL is invalid
    } else {
      errorMessage.style.display = 'none';
    }


    const type = document.getElementById('type').value;
    const src = document.getElementById('src').value;
    const width = document.getElementById('width').value || '100%';
    const height = document.getElementById('height').value || '500px';
    const background = document.getElementById('background').value || '#ffffff';
    const border = document.getElementById('border').value || 'none';
    const shadow = document.getElementById('shadow').value || 'none';
    const padding = document.getElementById('padding').value || '0';


    if (!type || !src) {
      alert('Please fill in all required fields.');
      return;
    }

    const shortcode =
      `[multiviewer type="${type}" src="${src}" width="${width}" height="${height}" background="${background}"  border="${border}" shadow="${shadow}" padding="${padding}"]`;
    document.getElementById('generated-shortcode').value = shortcode;
  });

  // Update the color preview dynamically
  document.getElementById('background').addEventListener('input', function() {
    const color = this.value;
    document.getElementById('color-preview').style.backgroundColor = color;
  });

  document.getElementById('copy-shortcode').addEventListener('click', function() {
    const shortcodeField = document.getElementById('generated-shortcode');
    shortcodeField.select();
    document.execCommand('copy');
    alert('Shortcode copied to clipboard!');
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