# 3D Multi-Viewer Plugin for WordPress  

## Description  

The **3D Multi-Viewer Plugin** allows WordPress users to embed interactive 3D models seamlessly. This plugin supports models from **Spline** and **Sketchfab**, offering extensive customization options such as background color, borders, padding, and more. Built with user convenience in mind, it features a shortcode generator for easy integration and adjustable iframe properties.  

---

## Features  

- Embed 3D models from **Spline** and **Sketchfab** using simple shortcodes.  
- Extensive customization:
  - Adjust background color, border, padding, and shadows.  
  - Set width and height to fit any layout.  
- Admin dashboard with shortcode generator for effortless integration.  
- Designed for smooth and secure embedding in WordPress.  

---

## Demo and Walkthrough  

### Live Demo:  
View live examples of embedded models [here](http://hanna.freesite.online/6-2/) or [here](http://hanna.freesite.online/).  

### Walkthrough:  
Watch a step-by-step guide to embedding models [here](https://app.supademo.com/demo/cm4ny1waw1138wf117m4ydzbt).  

---

## Installation  

1. [Download the plugin ZIP file here](https://drive.google.com/file/d/12Zc7T7MzhKgGoErdBDamqFdMXMYDQujM/view?usp=drive_link).  
2. Log in to your WordPress admin dashboard.  
3. Navigate to **Plugins > Add New** and click **Upload Plugin**.  
4. Select the downloaded ZIP file and click **Install Now**.  
5. Activate the plugin once installed.  

---

## Usage  

### Embedding Models:  
Use the `[multiviewer]` shortcode to add a 3D model to your content.  

**Syntax:**  
```plaintext  
[multiviewer type="TYPE" src="MODEL_URL" width="WIDTH" height="HEIGHT" background="BACKGROUND" border="BORDER" shadow="SHADOW" padding="PADDING"]  
```  

**Parameters:**  
- `type` (required): Platform type (`spline` or `sketchfab`).  
- `src` (required): URL of the 3D model or embed iframe.  
- `width` (optional): Viewer width (default: `100%`).  
- `height` (optional): Viewer height (default: `500px`).  
- `background` (optional): Background color (default: `transparent`).  
- `border` (optional): Border style (default: `none`).  
- `shadow` (optional): Box shadow (default: `none`).  
- `padding` (optional): Padding (default: `0`).  

### Examples:  

#### Spline Model:  
```plaintext  
[multiviewer type="spline" src="https://my.spline.design/molang3dcopy-fcfc5f52ce2d056f6bf215b94f76c0da/" width="100%" height="500px" background="transparent"]  
```  

#### Sketchfab Model:  
```plaintext  
[multiviewer type="sketchfab" src="https://sketchfab.com/models/example-id/embed" width="800px" height="600px" border="1px solid #000"]  
```  

---

## Admin Dashboard Features  

The plugin includes a user-friendly admin page to generate shortcodes:  
1. Choose the model type (Spline or Sketchfab).
2. Enter the model URL.  
3. Adjust viewer properties like width, height, background, border, shadow, and padding.  
4. Generate the shortcode instantly.  
---
---
## URL Validation
The plugin includes robust validation to ensure that only URLs from the supported platforms (Spline and Sketchfab) are accepted. This validation is implemented on the frontend using the following regex pattern:

```javascript
const srcInput = document.getElementById('src');
const url = srcInput.value.trim();
const errorMessage = document.getElementById('url-error');

const validUrlPattern = /^(https:\/\/)([a-zA-Z0-9-]+\.)?(spline|sketchfab)\.com/;

if (!validUrlPattern.test(url)) {
    errorMessage.textContent = "Invalid URL. Please enter a URL from Spline or Sketchfab.";
} else {
    errorMessage.textContent = "";
}
```
---

This validation ensures that:
- The URL starts with `https://`.
- The domain is either `spline.com` or `sketchfab.com`.

---

## Known Limitations  

- **Current Support**: Spline and Sketchfab models only.  
- **Excluded Formats**: Local GLTF/GLB files are not supported yet, due to:  
  1. **Zip File Handling**: Uploading and extracting zip files containing GLTF/GLB models requires additional plugins and adds complexity in:  
     - Parsing and processing file contents.  
     - Ensuring secure and seamless extraction workflows.  
  2. **Security Concerns**: Risks associated with file uploads.  
  3. **Performance Issues**: Potential resource consumption on shared hosting environments.  
  4. **Time Constraints**: Prioritizing stable features for this release.  
---

## Future Updates  

- **GLTF/GLB Support**: Plan to enable local file uploads and rendering in future versions.  
- **Enhanced Customization**: Additional iframe properties for advanced control.  

---

## Troubleshooting  

- **Model not displaying**: Ensure the model URL is correct and accessible.  
- **Background issues (Spline)**: Disable the background in Spline before embedding (refer to the [walkthrough](https://app.supademo.com/demo/cm4nxyod9112uwf11ol7ugfuy)).  

---

## Changelog  

### Version 1.2  
- Added shortcode attributes for `background`, `border`, `shadow`, and `padding`.  
- Introduced an admin page with a shortcode generator.  

### Version 1.1  
- Initial release with Spline and Sketchfab embedding support.  

---

## Author  

**Your Name**  
- [GitHub Profile](https://github.com/bemnet884/)  
- [Contact Email](mailto:bemnet537@gmail.com)  

---

## License  

This plugin is licensed under the [GPL-2.0 License](https://www.gnu.org/licenses/old-licenses/gpl-2.0.html).  
