# 3D Multi-Viewer Plugin for Nehabi  

## Description  

The **3D Multi-Viewer Plugin** revolutionizes how users integrate 3D models into their websites built on Nehabi. It offers seamless embedding of interactive 3D models from platforms like **Spline** and **Sketchfab**, combined with extensive customization options to fit any design requirement. With its user-friendly interface and robust functionality, this plugin is designed to empower creators, businesses, and developers alike.

---

## Features  

- Embed 3D models from **Spline** and **Sketchfab** using simple shortcodes.  
- Extensive customization:
  - Adjust background color, border, padding, and shadows.  
  - Set width and height to fit any layout.  
- Admin dashboard with shortcode generator for effortless integration.  
- Designed for smooth and secure embedding in Nehabi.  

---

## Demo and Walkthrough  

### Live Demo:  
View live examples of embedded models [here](http://hanna.freesite.online/6-2/) or [here](http://hanna.freesite.online/).  

### Walkthrough:  
Watch a step-by-step guide to embedding models [here](https://app.supademo.com/demo/cm4pbksdn15htwf119k1gk02z).  

---

## Installation  

1. Download "3d-multi-viewer-plugin" the plugin ZIP file [here](https://drive.google.com/file/d/1t_ifCi_kAIiCanUTHsO28ABcgjpY3nxf/view?usp=drive_link).  
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
## URL Validation
The plugin includes robust validation to ensure that only URLs from the supported platforms (Spline and Sketchfab) are accepted. This validation is implemented on the frontend using the following regex pattern:

```javascript
const srcInput = document.getElementById('src');
const url = srcInput.value.trim();
const errorMessage = document.getElementById('url-error');

    const validUrlPattern = /^(https:\/\/)([a-zA-Z0-9-]+\.)?(spline|sketchfab)\.(design|com)/;

    if (!validUrlPattern.test(url)) {
      errorMessage.style.display = 'block';
      srcInput.focus();
      return;
    } else {
      errorMessage.style.display = 'none';
    }
```
---

This validation ensures that:
- The URL starts with `https://`.
- The domain is either `spline.com` or `sketchfab.com`.

---

## **🌟 How This Plugin Generates Income**  

### **1. Direct Monetization:**  
- **3D Content Marketplace:** The plugin can integrate a marketplace directly within Nehabi, enabling users to **buy and sell 3D models, animations, or templates**. Creators can list their digital assets while the platform takes a commission on every transaction.  
- **Custom 3D Design Services:** The plugin can offer a service module where businesses can request **custom 3D assets** through the platform, generating additional revenue through premium service fees.  

### **2. Subscription Model:**  
- Introduce a **tier-based pricing model** for advanced 3D features (e.g., lighting effects, rendering quality, and AR/VR compatibility).  
- Free users get basic features, while paid tiers unlock **exclusive functionalities** like exportable animations, API integration for AR/VR platforms, or compatibility with Metaverse projects.  

### **3. Affiliate and Partnerships:**  
- Partner with other **3D software platforms** (e.g., Blender, Maya, Cinema 4D) for exclusive offers and shared profits.  
- Offer discounts on design tools or software to attract creators and generate revenue through affiliate programs.  

---

## **💡 Use Case: Elevating 3D Integration in Website Design**  

Imagine a **boutique jewelry store** launching its website using Nehabi:  
1. The plugin enables the store to showcase **rotatable 3D models of products**. Customers can zoom in, rotate, and interact with items, creating a lifelike shopping experience.  
2. Using **augmented reality**, the plugin allows customers to visualize products (like rings or necklaces) in real-world environments before purchase.  
3. Through the built-in marketplace, the jewelry store can sell its exclusive 3D designs to other businesses, expanding its revenue stream.  

This enhanced interactivity drives **customer engagement**, reduces returns, and increases conversions—proving the plugin's potential for businesses across industries like e-commerce, architecture, and education.  

---

## **🎯 Beyond the Contest: Long-Term Revenue from 3D**  

The plugin is not just a tool; it’s a **foundation for a scalable platform**:  
1. **3D Model Subscription Platform:** Build a library of high-quality, reusable 3D assets. Charge users for access or downloads.  
2. **Animation Services Marketplace:** Allow creators to upload custom animations for sale, opening new income streams.  
3. **Integration with Virtual Experiences:** Expand into AR/VR by creating templates for virtual events, showrooms, or games.  
4. **Advertising in 3D Models:** Allow brands to embed ads or logos in 3D designs for targeted marketing, generating passive income.  

By integrating with Nehabi, the plugin doesn’t just enhance features—it creates **a new ecosystem of innovation and income generation**.  

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
## Additional Notes on Customizations  

Some customizations for the embedded 3D models may need to be done on the respective platforms (Spline or Sketchfab) and may require premium subscriptions.  

### Specific Considerations:  

- **Spline**:  
  - To remove the Spline logo or watermark from the embedded models, you must make adjustments within the Spline platform. This option might only be available to users with a premium subscription.  
  - Background removal and other customization options should also be configured directly in Spline before embedding the model.  

- **Sketchfab**:  
  - Buttons like fullscreen, annotations, or Sketchfab branding in the viewer can only be customized through Sketchfab's settings. Some of these features may also require a premium account.  

These platform-specific customizations cannot be managed directly through the plugin and must be configured externally before embedding the models.  
 
---

## Future Updates  

- **GLTF/GLB Support**: Plan to enable local file uploads and rendering in future versions.  
- **Enhanced Customization**: Additional iframe properties for advanced control.  


---

### **Why This Plugin?**  
This plugin is not just a tool—it’s a gateway to the future of interactive web design. Empowering users to unlock the power of 3D for their businesses, it transforms websites into **engaging, monetizable platforms**.  

Judges, this is more than a plugin—it’s a **game-changer for the Nehabi ecosystem**.  

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

- **Registered email**: bemnet537@gmail.com
- **Project name**: Multi-Viewer-3D-Plugin-Nehabi.
- **Full name**: Bemnet Beyene Hameretibeb.
- **GitHub URL**: https://github.com/bemnet884/.
- [GitHub Profile](https://github.com/bemnet884/)  
- [Contact Email](mailto:bemnet537@gmail.com)  
---

## License  

This plugin is licensed under the [GPL-2.0 License](https://www.gnu.org/licenses/old-licenses/gpl-2.0.html). 
