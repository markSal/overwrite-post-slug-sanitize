<?php
// Make sure WPDB is available
global $wpdb;

// Post slug for this example
$post_slug = 'khronos-gltf-2.0-released-as-an-iso-iec-international-standard';

// Insert/Update Post (Wordpress will sanitize the post slug)
$post_id = wp_insert_post(array(
	'post_title'    => wp_strip_all_tags('Khronos glTF 2.0 released as an ISO/IEC International Standard'),
	'post_content'  => '
		<p><em>Transposition to ISO/IEC 12113 solidifies glTF’s global recognition and adoption as a 3D asset format</em></p>
		<p><strong>Beaverton, OR – August 4, 2022</strong> – Today the Khronos® Group, an open consortium of industry-leading companies creating advanced interoperability standards, announced that its glTF™ 2.0 specification for the efficient transmission and loading of 3D models has been released as the ISO/IEC 12113:2022 International Standard. Khronos has successfully completed the transposition of glTF 2.0 through the ISO/IEC JTC 1 PAS (Publicly Available Specification) Submission Process to solidify glTF’s global recognition and accelerate its adoption by industry and other standards. Khronos will continue to evolve glTF as a Khronos specification and regularly update ISO/IEC 12113 with proven, widely available glTF functionality to avoid industry fragmentation. The ISO/IEC 12113:2022 specification is available <a href="https://www.iso.org/standard/83990.html">here</a>.</p>
		<p>In May 2021, ISO/IEC JTC 1 approved Khronos as a PAS submitter, one of only 15 SDOs (Standards Developing Organizations) globally that are enabled to submit proven, widely adopted industry standards for transposition to International Standards. glTF 2.0 was submitted to JTC 1 in October 2021 and was unanimously approved as an International Standard by all voting national standards bodies with no requested technical changes.</p>
		<p>“In 2013, Khronos launched the glTF initiative with the goal to create a 3D asset format that was as pervasive as JPEG for images - and now glTF, like JPEG, is an International Standard,” said Neil Trevett, vice president developer ecosystems at NVIDIA and Khronos president. “ISO/IEC International Standards are recognized throughout the world, and often constitute the technical regulatory basis for public procurement of IT goods and services. Khronos is proud to be an ISO/IEC JTC 1 PAS Submitter, and intends to proactively transpose additional widely-adopted Khronos specifications to International Standards for the benefit of the industry.”</p>
		<p>Under the JTC 1 PAS transposition process, Khronos retains full control over the glTF specification, and glTF’s status as an ISO/IEC standard will not slow its evolution. Khronos will make regular submissions to bring updates and new widely adopted glTF functionality into refreshed versions of ISO/IEC 12113 to ensure that there is no long-term divergence between the ISO/IEC and Khronos specifications. This provides developers the choice to use the Khronos specification that defines the latest glTF functionality and extensions, or ISO/IEC 12113 for the compatible set of glTF functionality that has been approved as an International Standard.</p>
		<p>“Congratulations to Khronos on the publication of ISO/IEC 12113! I’m looking forward to future collaboration between ISO/IEC JTC 1 and Khronos,” said Phil Wennblom, chair of ISO/IEC JTC 1.</p>
		<h2>About glTF</h2>
		<p><a href="https://registry.khronos.org/glTF/specs/2.0/glTF-2.0.html">glTF™</a> is a royalty-free specification for the efficient transmission and loading of 3D scenes and models. glTF minimizes the runtime processing to unpack and process 3D assets, while enabling sophisticated pervasive graphics functionality. glTF defines an extensible, common publishing format for 3D content, tools and services that streamlines authoring workflows and enables interoperable use of content across the industry. See: <a href="https://www.khronos.org/gltf">khronos.org/glTF</a>.</p>
		<h2>About ISO/IEC JTC 1</h2>
		<p>The <a href="https://www.iso.org/">International Organization for Standardization (ISO)</a> is an international nongovernmental organization made up of national standards bodies; it develops and publishes a wide range of proprietary, industrial, and commercial standards and is composed of representatives from various national standards organizations. Founded in 1906, the <a href="http://www.iec.ch/">International Electrotechnical Commission (IEC)</a> is the world’s leading organization for the preparation and publication of international standards for all electrical, electronic and related technologies. ISO and IEC play important roles in facilitating world trade by providing common standards among different countries. The only joint technical committee of the ISO and IEC, <a href="https://jtc1info.org/">ISO/IEC JTC 1</a>, has been developing standards that support information and communications technology advancement across industry sectors for more than 30 years.</p>
		<h2>About Khronos</h2>
		<p>With over 200 member organizations and operating for over 20 years, the Khronos Group is an open, non-profit consortium of over 200 industry-leading organizations creating royalty-free interoperability standards for 3D graphics, augmented and virtual reality, parallel programming, vision acceleration, machine learning, and the metaverse. Khronos activities include 3D Commerce™, ANARI™, glTF™, KTX™, NNEF™, OpenCL™, OpenGL®, OpenGL® ES, OpenVG™, OpenVX™, OpenXR™, SPIR-V™, SYCL™, Vulkan®, and WebGL™. Khronos members drive the development and evolution of Khronos specifications and are able to accelerate the delivery of cutting-edge platforms and applications through early access to specification drafts and conformance tests.</p>

		<p class="text-center">###</p>
		<p><small>
		Khronos® and Vulkan® are registered trademarks, and ANARI™, WebGL™, glTF™, NNEF™, OpenVX™, SPIR™, SPIR-V™, SYCL™, OpenVG™ and 3D Commerce™ are trademarks of The Khronos Group Inc. OpenXR™ is a trademark owned by The Khronos Group Inc. and is registered as a trademark in China, the European Union, Japan and the United Kingdom. OpenCL™ is a trademark of Apple Inc. and OpenGL® is a registered trademark and the OpenGL ES™ and OpenGL SC™ logos are trademarks of Hewlett Packard Enterprise used under license by Khronos. All other product names, trademarks, and/or company names are used solely for identification and belong to their respective owners.

		</small></p>
	',
	'post_name'	=>	$post_slug,
	'post_status'   => 'publish',
	'post_author'   => 1,
));

// Update row in DB using wpdb and force the original post slug 
$wpdb->update(
	// Table
	$wpdb->prefix .'posts', 
	
	// Data
	array('post_name' => $post_slug), 
	
	// Where
	array( 'ID' => $post_id )
);
?>
