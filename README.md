![Extension icon](Resources/Public/Icons/Extension.svg)

# SEO Table of contents (TYPO3 Extension)


## Introduction

Some organic search results in Google contain 'jump to' links, either just before the meta description or below.

To get these anchor links for your website, you'll need:

- **URL fragments**, assigned directly to your headings as id attributes (anchors)
- a **table of contents** for your article/page, directly linking to the headings' anchors (no use of relative/absolute URLs)

[You can read all about the requirements in this tutorial](https://www.sebkln.de/en/tutorials/seo-jump-links/).


## What does this extension do?

This TYPO3 extension provides a **new menu content element** for a table of contents. It is similar to the default 'Section Index',
but meets the above-mentioned requirements to get anchor links in Google SERPs (Search Engine Result Pages).

The extension also extends the Header partials of EXT:fluid_styled_content with the necessary anchors.


## Compatibility

TYPO3 8.7.0 - 11.5.99


## Installation

The extension needs to be installed as any other extension of TYPO3 CMS.

Perform the following steps:

1. Load and install the extension.
2. Include the static template *"SEO Table of contents (Basic)"* into your TypoScript template.
3. Optional: If you use the extension [content_slug](https://extensions.typo3.org/extension/content_slug) for human-readable URL fragments, also include the second static template *"SEO Table of contents (with content_slug)"*.
4. Customize the Fluid templates, if necessary.
