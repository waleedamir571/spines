<?php include '../partials/header.php'; ?>



<style id="rocket-critical-css">
    :root {
        --woocommerce: #720eec;
        --wc-green: #7ad03a;
        --wc-red: #a00;
        --wc-orange: #ffba00;
        --wc-blue: #2ea2cc;
        --wc-primary: #720eec;
        --wc-primary-text: #fcfbfe;
        --wc-secondary: #e9e6ed;
        --wc-secondary-text: #515151;
        --wc-highlight: #958e09;
        --wc-highligh-text: white;
        --wc-content-bg: #fff;
        --wc-subtext: #767676;
        --wc-form-border-color: rgba(32, 7, 7, 0.8);
        --wc-form-border-radius: 4px;
        --wc-form-border-width: 1px
    }

    :root {
        --woocommerce: #720eec;
        --wc-green: #7ad03a;
        --wc-red: #a00;
        --wc-orange: #ffba00;
        --wc-blue: #2ea2cc;
        --wc-primary: #720eec;
        --wc-primary-text: #fcfbfe;
        --wc-secondary: #e9e6ed;
        --wc-secondary-text: #515151;
        --wc-highlight: #958e09;
        --wc-highligh-text: white;
        --wc-content-bg: #fff;
        --wc-subtext: #767676;
        --wc-form-border-color: rgba(32, 7, 7, 0.8);
        --wc-form-border-radius: 4px;
        --wc-form-border-width: 1px
    }

    :root {
        --ld-spacer-0: 0.25rem;
        --ld-spacer-1: 0.5rem;
        --ld-spacer-2: 0.75rem;
        --ld-spacer-3: 1rem;
        --ld-spacer-4: 1.25rem;
        --ld-spacer-5: 1.5rem;
        --ld-spacer-6: 2rem;
        --ld-spacer-7: 2.25rem;
        --ld-spacer-8: 2.5rem;
        --ld-spacer-9: 3rem;
        --ld-spacer-10: 3.5rem;
        --ld-spacer-11: 4rem;
        --ld-spacer-12: 5rem;
        --ld-spacer-13: 6rem;
        --ld-spacer-14: 8rem;
        --ld-spacer-fixed-0: 4px;
        --ld-spacer-fixed-1: 8px;
        --ld-spacer-fixed-2: 12px;
        --ld-spacer-fixed-3: 16px;
        --ld-spacer-fixed-4: 20px;
        --ld-spacer-fixed-5: 24px;
        --ld-spacer-fixed-6: 32px;
        --ld-spacer-fixed-7: 36px;
        --ld-spacer-fixed-8: 40px;
        --ld-spacer-fixed-9: 48px;
        --ld-spacer-fixed-10: 56px;
        --ld-spacer-fixed-11: 64px;
        --ld-spacer-fixed-12: 80px;
        --ld-spacer-fixed-13: 96px;
        --ld-spacer-fixed-14: 128px;
        --ld-radius: 4px;
        --ld-color-primitives-blue-100: #f3f8ff;
        --ld-color-primitives-blue-150: #d6defb;
        --ld-color-primitives-blue-175: #b6c7f7;
        --ld-color-primitives-blue-200: #98acf5;
        --ld-color-primitives-blue-500: #235af3;
        --ld-color-primitives-blue-800: #0e2a90;
        --ld-color-primitives-green-100: #eef7f1;
        --ld-color-primitives-green-250: #7cd09d;
        --ld-color-primitives-green-300: #3eab6a;
        --ld-color-primitives-green-500: #2b7f4d;
        --ld-color-primitives-green-800: #055224;
        --ld-color-primitives-grey-0: #fff;
        --ld-color-primitives-grey-100: #f7f9fc;
        --ld-color-primitives-grey-140: #dce1e8;
        --ld-color-primitives-grey-150: #d2d7e2;
        --ld-color-primitives-grey-200: #a7adc2;
        --ld-color-primitives-grey-350: #8d90a7;
        --ld-color-primitives-grey-500: #73738c;
        --ld-color-primitives-grey-800: #4a4a68;
        --ld-color-primitives-grey-900: #0e0e2c;
        --ld-color-primitives-red-100: #faeeee;
        --ld-color-primitives-red-200: #f6cfcf;
        --ld-color-primitives-red-250: #ee8b8d;
        --ld-color-primitives-red-300: #e65255;
        --ld-color-primitives-red-500: #db0000;
        --ld-color-primitives-red-800: #8f0000;
        --ld-color-primitives-yellow-100: #fdf8ec;
        --ld-color-primitives-yellow-200: #f9d99e;
        --ld-color-primitives-yellow-500: #f3b33e;
        --ld-color-primitives-yellow-800: #eb7100;
        --ld-color-semantic-alert-success-background: var(--ld-color-primitives-blue-100);
        --ld-color-semantic-alert-success-border: var(--ld-color-primitives-blue-200);
        --ld-color-semantic-alert-success-icon: var(--ld-color-primitives-blue-150);
        --ld-color-semantic-alert-warning-background: var(--ld-color-primitives-yellow-100);
        --ld-color-semantic-alert-warning-border: var(--ld-color-primitives-yellow-500);
        --ld-color-semantic-alert-warning-icon: var(--ld-color-primitives-yellow-200);
        --ld-color-semantic-alert-error-background: var(--ld-color-primitives-red-100);
        --ld-color-semantic-alert-error-border: var(--ld-color-primitives-red-300);
        --ld-color-semantic-alert-error-icon: var(--ld-color-primitives-red-200);
        --ld-color-semantic-button-primary-background-disabled-hover: var(--ld-color-primitives-grey-200);
        --ld-color-semantic-button-primary-background-disabled: var(--ld-color-primitives-grey-100);
        --ld-color-semantic-button-primary-background-hover: var(--ld-color-primitives-blue-800);
        --ld-color-semantic-button-primary-background: var(--ld-color-primitives-blue-500);
        --ld-color-semantic-button-primary-border-disabled: var(--ld-color-primitives-grey-500);
        --ld-color-semantic-button-secondary-background-hover: var(--ld-color-primitives-blue-100);
        --ld-color-semantic-button-secondary-background: var(--ld-color-primitives-grey-0);
        --ld-color-semantic-button-secondary-border-hover: var(--ld-color-primitives-blue-800);
        --ld-color-semantic-button-secondary-border: var(--ld-color-primitives-blue-500);
        --ld-color-semantic-button-tertiary-border: var(--ld-color-primitives-blue-500);
        --ld-color-semantic-button-tertiary-focus: var(--ld-color-primitives-blue-150);
        --ld-color-semantic-button-tertiary-text-disabled-hover: var(--ld-color-primitives-grey-500);
        --ld-color-semantic-button-tertiary-text-disabled: var(--ld-color-primitives-grey-200);
        --ld-color-semantic-button-tertiary-text-hover: var(--ld-color-primitives-blue-500);
        --ld-color-semantic-button-tertiary-text-icon-only: var(--ld-color-primitives-grey-500);
        --ld-color-semantic-button-tertiary-text: var(--ld-color-primitives-grey-800);
        --ld-color-semantic-field-background-active: var(--ld-color-primitives-blue-100);
        --ld-color-semantic-field-background-disabled: var(--ld-color-primitives-grey-100);
        --ld-color-semantic-field-background-error: var(--ld-color-primitives-red-100);
        --ld-color-semantic-field-background-hover: var(--ld-color-primitives-blue-100);
        --ld-color-semantic-field-background-valid: var(--ld-color-primitives-green-100);
        --ld-color-semantic-field-background: var(--ld-color-primitives-grey-0);
        --ld-color-semantic-field-border-disabled: var(--ld-color-primitives-grey-200);
        --ld-color-semantic-field-border: var(--ld-color-primitives-grey-150);
        --ld-color-semantic-field-border-error: var(--ld-color-primitives-red-200);
        --ld-color-semantic-field-border-valid: var(--ld-color-primitives-green-200);
        --ld-color-semantic-general-border: var(--ld-color-primitives-grey-140);
        --ld-color-semantic-general-middle-grey: var(--ld-color-primitives-grey-150);
        --ld-color-semantic-general-tab-underline: var(--ld-color-primitives-grey-150);
        --ld-color-semantic-text-body: var(--ld-color-primitives-grey-800);
        --ld-color-semantic-text-body-subtle: var(--ld-color-primitives-grey-500);
        --ld-color-semantic-text-button-primary: var(--ld-color-primitives-grey-0);
        --ld-color-semantic-text-button-primary-disabled: var(--ld-color-primitives-grey-800);
        --ld-color-semantic-text-button-primary-disabled-hover: var(--ld-color-primitives-grey-900);
        --ld-color-semantic-text-button-secondary-disabled-hover: var(--ld-color-primitives-grey-900);
        --ld-color-semantic-text-link: var(--ld-color-primitives-blue-500);
        --ld-color-semantic-text-link-hover: var(--ld-color-primitives-blue-800);
        --ld-typography-font-family: inter, -apple-system, roboto, ubuntu, sans-serif;
        --ld-typography-font-weight-regular: 400;
        --ld-typography-font-weight-medium: 500;
        --ld-typography-font-weight-bold: 700;
        --ld-typography-desktop-h1-size: 4rem;
        --ld-typography-desktop-h1-height: 4.5rem;
        --ld-typography-desktop-h1-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-h1-spacing: -2%;
        --ld-typography-desktop-h1-margin: var(--ld-spacer-8);
        --ld-typography-mobile-h1-size: 3rem;
        --ld-typography-mobile-h1-height: 3.5rem;
        --ld-typography-mobile-h1-margin: var(--ld-spacer-7);
        --ld-typography-desktop-h2-size: 3rem;
        --ld-typography-desktop-h2-height: 3.5rem;
        --ld-typography-desktop-h2-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-h2-spacing: -2%;
        --ld-typography-desktop-h2-margin: var(--ld-spacer-7);
        --ld-typography-mobile-h2-size: 2.5rem;
        --ld-typography-mobile-h2-height: 3rem;
        --ld-typography-mobile-h2-margin: var(--ld-spacer-6);
        --ld-typography-desktop-h3-size: 2.5rem;
        --ld-typography-desktop-h3-height: 3rem;
        --ld-typography-desktop-h3-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-h3-spacing: -2%;
        --ld-typography-desktop-h3-margin: var(--ld-spacer-6);
        --ld-typography-mobile-h3-size: 2rem;
        --ld-typography-mobile-h3-height: 2.5rem;
        --ld-typography-mobile-h3-margin: var(--ld-spacer-5);
        --ld-typography-desktop-h4-size: 2rem;
        --ld-typography-desktop-h4-height: 2.5rem;
        --ld-typography-desktop-h4-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-h4-spacing: inherit;
        --ld-typography-desktop-h4-margin: var(--ld-spacer-5);
        --ld-typography-mobile-h4-size: 1.5rem;
        --ld-typography-mobile-h4-height: 2rem;
        --ld-typography-mobile-h4-margin: var(--ld-spacer-4);
        --ld-typography-desktop-h5-size: 1.5rem;
        --ld-typography-desktop-h5-height: 2rem;
        --ld-typography-desktop-h5-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-h5-spacing: inherit;
        --ld-typography-desktop-h5-margin: var(--ld-spacer-4);
        --ld-typography-mobile-h5-size: 1.25rem;
        --ld-typography-mobile-h5-height: 1.75rem;
        --ld-typography-mobile-h5-margin: var(--ld-spacer-4);
        --ld-typography-desktop-h6-size: 1.125rem;
        --ld-typography-desktop-h6-height: 1.5rem;
        --ld-typography-desktop-h6-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-h6-spacing: inherit;
        --ld-typography-desktop-h6-margin: var(--ld-spacer-3);
        --ld-typography-mobile-h6-size: 1.125rem;
        --ld-typography-mobile-h6-height: 1.5rem;
        --ld-typography-mobile-h6-margin: var(--ld-spacer-3);
        --ld-typography-desktop-body-large-size: 1.25rem;
        --ld-typography-desktop-body-large-height: 1.75rem;
        --ld-typography-mobile-body-large-size: 1rem;
        --ld-typography-mobile-body-large-height: 1.5rem;
        --ld-typography-desktop-body-size: 1rem;
        --ld-typography-desktop-body-height: 1.5rem;
        --ld-typography-mobile-body-size: 0.875rem;
        --ld-typography-mobile-body-height: 1.375rem;
        --ld-typography-desktop-body-small-size: 0.875rem;
        --ld-typography-desktop-body-small-height: 1.375rem;
        --ld-typography-desktop-caption-size: 0.75rem;
        --ld-typography-desktop-caption-height: 1.25rem;
        --ld-typography-mobile-caption-size: 0.75rem;
        --ld-typography-mobile-caption-height: 1.25rem;
        --ld-typography-desktop-pre-title-size: 0.75rem;
        --ld-typography-desktop-pre-title-height: 1.25rem;
        --ld-typography-desktop-pre-title-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-pre-title-spacing: 3%;
        --ld-typography-desktop-pre-title-transform: uppercase;
        --ld-typography-mobile-pre-title-size: 0.75rem;
        --ld-typography-mobile-pre-title-height: 1.25rem;
        --ld-typography-desktop-button-text-size: var(--ld-typography-desktop-body-size);
        --ld-typography-desktop-button-text-height: var(--ld-typography-desktop-body-height);
        --ld-typography-desktop-button-text-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-button-text-spacing: 3%;
        --ld-typography-mobile-button-text-size: var(--ld-typography-mobile-body-size);
        --ld-typography-mobile-button-text-height: var(--ld-typography-mobile-body-height);
        --ld-typography-desktop-link-size: 1rem;
        --ld-typography-desktop-link-height: 1.5rem;
        --ld-typography-desktop-link-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-link-decoration: underline;
        --ld-typography-mobile-link-size: 0.875rem;
        --ld-typography-mobile-link-height: 1.375rem;
        --ld-icon-size-xl: 2rem;
        --ld-icon-size-lg: 1.5rem;
        --ld-icon-size-md: 1.25rem;
        --ld-icon-size-sm: 1rem;
        --ld-icon-size-default: var(--ld-icon-size-md);
        --ld-button-border-radius: var(--ld-border-radius);
        --ld-button-border-radius-rounded: 100px;
        --ld-field-radius: var(--ld-radius);
        --ld-border-radius: 8px;
        --ld-border-radius-small: 4px;
        --ld-alert-border-radius: 8px;
        --ld-alert-border-width: 2px;
        --ld-alert-margin: 0 0 var(--ld-spacer-3) 0;
        --ld-alert-padding: var(--ld-spacer-3) var(--ld-spacer-fixed-3);
        --ld-alert-last-margin: 0 0 var(--ld-spacer-8) 0;
        --ld-progress-bar-width: 100%;
        --ld-progress-bar-height: 1rem;
        --ld-progress-bar-background-color: var(--ld-color-system-border);
        --ld-progress-bar-foreground-color: var(--ld-color-brand-primary);
        --ld-progress-bar-border-radius: 0.125rem;
        --ld-progress-bar-margin: var(--ld-spacer-4) 0 var(--ld-spacer-2) 0;
        --ld-progress-bar-value: 0%
    }

    :root {
        --ld-color-brand-primary: var(--ld-color-primitives-blue-500);
        --ld-color-brand-secondary: var(--ld-color-primitives-yellow-500);
        --ld-color-brand-tertiary: #479bf8;
        --ld-color-semantic-success: var(--ld-color-primitives-green-300);
        --ld-color-semantic-error: var(--ld-color-primitives-red-300);
        --ld-color-system-validation-error: var(--ld-color-primitives-red-500);
        --ld-color-semantic-error-light: var(--ld-color-primitives-red-100);
        --ld-color-system-validation-success: #2f8351;
        --ld-color-semantic-success-light: var(--ld-color-primitives-green-100);
        --ld-color-system-dark: var(--ld-color-primitives-blue-800);
        --ld-color-system-body-text: var(--ld-color-primitives-grey-800);
        --ld-color-system-text-dark: var(--ld-color-primitives-grey-900);
        --ld-color-system-subtle: #8c8ca2;
        --ld-color-system-subtle-text: var(--ld-color-system-subtle);
        --ld-color-system-border: var(--ld-color-primitives-grey-140);
        --ld-color-system-light-1: var(--ld-color-primitives-blue-100);
        --ld-color-system-light-2: var(--ld-color-primitives-grey-100);
        --ld-color-system-white: var(--ld-color-primitives-grey-0);
        --ld-color-button: var(--ld-color-system-white);
        --ld-color-button-bg: var(--ld-color-brand-primary);
        --ld-color-button-bg-hover: var(--ld-color-system-dark);
        --ld-color-button-secondary-border: var(--ld-color-brand-primary);
        --ld-color-button-disabled-bg-hover: var(--ld-color-primitives-grey-200);
        --ld-color-button-disabled-border-hover: var(--ld-color-system-subtle-text);
        --ld-color-progress-bar-bg: #f5f5f5;
        --ld-color-progress-bar-fg: #000;
        --ld-color-field-bg: var(--ld-color-system-light-1);
        --ld-color-field-bg-hover: var(--ld-color-system-white);
        --ld-color-field-bg-active: var(--ld-color-system-white);
        --ld-color-field-bg-valid: var(--ld-color-system-white);
        --ld-color-field-bg-error: var(--ld-color-system-white);
        --ld-color-field-bg-disabled: var(--ld-color-system-light-2);
        --ld-color-field-border: var(--ld-color-system-subtle);
        --ld-color-field-border-active: var(--ld-color-brand-primary);
        --ld-color-field-border-active-shadow: 0 0 0 4px rgba(50, 89, 235, .2);
        --ld-color-field-border-error: var(--ld-color-semantic-error);
        --ld-color-field-border-error-shadow: 0 0 0 4px rgba(230, 82, 85, .2);
        --ld-color-field-border-valid: var(--ld-color-semantic-success);
        --ld-color-field-border-valid-shadow: 0 0 0 4px rgba(62, 171, 106, .2);
        --ld-color-field-border-disabled: var(--ld-color-system-light-3);
        --ld-color-field-text: var(--ld-color-system-subtle-text);
        --ld-color-field-text-active: var(--ld-color-system-dark);
        --ld-color-field-text-valid: var(--ld-color-system-dark);
        --ld-color-field-text-error: var(--ld-color-system-dark);
        --ld-color-field-text-disabled: var(--ld-color-system-subtle-text);
        --ld-color-field-description: var(--ld-color-system-subtle-text);
        --ld-color-field-error: var(--ld-color-semantic-error);
        --ld-color-label: var(--ld-color-system-dark)
    }

    .dce-visibility-element-hidden {
        display: none !important
    }

    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    *,
    :after,
    :before {
        box-sizing: border-box
    }

    body {
        background-color: #fff;
        color: #333;
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        margin: 0;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    h2 {
        color: inherit;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.2;
        margin-block-end: 1rem;
        margin-block-start: .5rem
    }

    h2 {
        font-size: 2rem
    }

    p {
        margin-block-end: .9rem;
        margin-block-start: 0
    }

    a {
        background-color: transparent;
        color: #c36;
        text-decoration: none
    }

    b,
    strong {
        font-weight: bolder
    }

    img {
        border-style: none;
        height: auto;
        max-width: 100%
    }

    button {
        font-family: inherit;
        font-size: 1rem;
        line-height: 1.5;
        margin: 0
    }

    button {
        overflow: visible
    }

    button {
        text-transform: none
    }

    button {
        -webkit-appearance: button;
        width: auto
    }

    button {
        background-color: transparent;
        border: 1px solid #c36;
        border-radius: 3px;
        color: #c36;
        display: inline-block;
        font-size: 1rem;
        font-weight: 400;
        padding: .5rem 1rem;
        text-align: center;
        white-space: nowrap
    }

    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit
    }

    li,
    ul {
        background: transparent;
        border: 0;
        font-size: 100%;
        margin-block-end: 0;
        margin-block-start: 0;
        outline: 0;
        vertical-align: baseline
    }

    :root {
        --ld-color-semantic-success: #2f8351;
        --ld-color-semantic-error: var(--ld-color-primitives-red-500);
        --ld-color-system-body-text: #333;
        --ld-color-system-middle-gray: var(--ld-color-primitives-grey-150);
        --ld-color-system-middle-gray-light: #edf0f5;
        --ld-color-system-light-2: #f6f8fa;
        --ld-color-system-subtle: var(--ld-color-primitives-grey-500);
        --ld-color-system-subtle-text: var(--ld-color-system-subtle);
        --ld-color-field-bg: var(--ld-color-system-white);
        --ld-color-field-border: #8694b1;
        --ld-color-field-border-error: var(--ld-color-semantic-error);
        --ld-color-field-border-valid: var(--ld-color-semantic-success);
        --ld-color-field-error: var(--ld-color-semantic-error);
        --ld-typography-font-family: inter, -apple-system, roboto, ubuntu, sans-serif;
        --ld-typography-font-weight-regular: 400;
        --ld-typography-font-weight-medium: 500;
        --ld-typography-font-weight-bold: 700;
        --ld-typography-desktop-h1-size: 4rem;
        --ld-typography-desktop-h1-height: 4.5rem;
        --ld-typography-desktop-h1-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-h1-spacing: -2%;
        --ld-typography-desktop-h1-margin: var(--ld-spacer-8);
        --ld-typography-mobile-h1-size: 3rem;
        --ld-typography-mobile-h1-height: 3.5rem;
        --ld-typography-mobile-h1-margin: var(--ld-spacer-7);
        --ld-typography-desktop-h2-size: 3rem;
        --ld-typography-desktop-h2-height: 3.5rem;
        --ld-typography-desktop-h2-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-h2-spacing: -2%;
        --ld-typography-desktop-h2-margin: var(--ld-spacer-7);
        --ld-typography-mobile-h2-size: 2.5rem;
        --ld-typography-mobile-h2-height: 3rem;
        --ld-typography-mobile-h2-margin: var(--ld-spacer-6);
        --ld-typography-desktop-h3-size: 2.5rem;
        --ld-typography-desktop-h3-height: 3rem;
        --ld-typography-desktop-h3-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-h3-spacing: -2%;
        --ld-typography-desktop-h3-margin: var(--ld-spacer-6);
        --ld-typography-mobile-h3-size: 2rem;
        --ld-typography-mobile-h3-height: 2.5rem;
        --ld-typography-mobile-h3-margin: var(--ld-spacer-5);
        --ld-typography-desktop-h4-size: 2rem;
        --ld-typography-desktop-h4-height: 2.5rem;
        --ld-typography-desktop-h4-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-h4-spacing: inherit;
        --ld-typography-desktop-h4-margin: var(--ld-spacer-5);
        --ld-typography-mobile-h4-size: 1.5rem;
        --ld-typography-mobile-h4-height: 2rem;
        --ld-typography-mobile-h4-margin: var(--ld-spacer-4);
        --ld-typography-desktop-h5-size: 1.5rem;
        --ld-typography-desktop-h5-height: 2rem;
        --ld-typography-desktop-h5-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-h5-spacing: inherit;
        --ld-typography-desktop-h5-margin: var(--ld-spacer-4);
        --ld-typography-mobile-h5-size: 1.25rem;
        --ld-typography-mobile-h5-height: 1.75rem;
        --ld-typography-mobile-h5-margin: var(--ld-spacer-4);
        --ld-typography-desktop-h6-size: 1.125rem;
        --ld-typography-desktop-h6-height: 1.5rem;
        --ld-typography-desktop-h6-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-h6-spacing: inherit;
        --ld-typography-desktop-h6-margin: var(--ld-spacer-3);
        --ld-typography-mobile-h6-size: 1.125rem;
        --ld-typography-mobile-h6-height: 1.5rem;
        --ld-typography-mobile-h6-margin: var(--ld-spacer-3);
        --ld-typography-desktop-body-large-size: 1.25rem;
        --ld-typography-desktop-body-large-height: 1.75rem;
        --ld-typography-mobile-body-large-size: 1rem;
        --ld-typography-mobile-body-large-height: 1.5rem;
        --ld-typography-desktop-body-size: 1rem;
        --ld-typography-desktop-body-height: 1.5rem;
        --ld-typography-mobile-body-size: 0.875rem;
        --ld-typography-mobile-body-height: 1.375rem;
        --ld-typography-desktop-body-small-size: 0.875rem;
        --ld-typography-desktop-body-small-height: 1.375rem;
        --ld-typography-desktop-caption-size: 0.75rem;
        --ld-typography-desktop-caption-height: 1.25rem;
        --ld-typography-mobile-caption-size: 0.75rem;
        --ld-typography-mobile-caption-height: 1.25rem;
        --ld-typography-desktop-pre-title-size: 0.75rem;
        --ld-typography-desktop-pre-title-height: 1.25rem;
        --ld-typography-desktop-pre-title-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-pre-title-spacing: 3%;
        --ld-typography-desktop-pre-title-transform: uppercase;
        --ld-typography-mobile-pre-title-size: 0.75rem;
        --ld-typography-mobile-pre-title-height: 1.25rem;
        --ld-typography-desktop-button-text-size: var(--ld-typography-desktop-body-size);
        --ld-typography-desktop-button-text-height: var(--ld-typography-desktop-body-height);
        --ld-typography-desktop-button-text-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-button-text-spacing: 3%;
        --ld-typography-mobile-button-text-size: var(--ld-typography-mobile-body-size);
        --ld-typography-mobile-button-text-height: var(--ld-typography-mobile-body-height);
        --ld-typography-desktop-link-size: 1rem;
        --ld-typography-desktop-link-height: 1.5rem;
        --ld-typography-desktop-link-weight: var(--ld-typography-font-weight-bold);
        --ld-typography-desktop-link-decoration: underline;
        --ld-typography-mobile-link-size: 0.875rem;
        --ld-typography-mobile-link-height: 1.375rem;
        --ld-color-primitives-blue-100: #f3f8ff;
        --ld-color-primitives-blue-150: #d6defb;
        --ld-color-primitives-blue-175: #b6c7f7;
        --ld-color-primitives-blue-200: #98acf5;
        --ld-color-primitives-blue-500: #235af3;
        --ld-color-primitives-blue-800: #0e2a90;
        --ld-color-primitives-green-100: #eef7f1;
        --ld-color-primitives-green-250: #7cd09d;
        --ld-color-primitives-green-300: #3eab6a;
        --ld-color-primitives-green-500: #2b7f4d;
        --ld-color-primitives-green-800: #055224;
        --ld-color-primitives-grey-0: #fff;
        --ld-color-primitives-grey-100: #f7f9fc;
        --ld-color-primitives-grey-140: #dce1e8;
        --ld-color-primitives-grey-150: #d2d7e2;
        --ld-color-primitives-grey-200: #a7adc2;
        --ld-color-primitives-grey-350: #8d90a7;
        --ld-color-primitives-grey-500: #73738c;
        --ld-color-primitives-grey-800: #4a4a68;
        --ld-color-primitives-grey-900: #0e0e2c;
        --ld-color-primitives-red-100: #faeeee;
        --ld-color-primitives-red-200: #f6cfcf;
        --ld-color-primitives-red-250: #ee8b8d;
        --ld-color-primitives-red-300: #e65255;
        --ld-color-primitives-red-500: #db0000;
        --ld-color-primitives-red-800: #8f0000;
        --ld-color-primitives-yellow-100: #fdf8ec;
        --ld-color-primitives-yellow-200: #f9d99e;
        --ld-color-primitives-yellow-500: #f3b33e;
        --ld-color-primitives-yellow-800: #eb7100;
        --ld-color-semantic-alert-success-background: var(--ld-color-primitives-blue-100);
        --ld-color-semantic-alert-success-border: var(--ld-color-primitives-blue-200);
        --ld-color-semantic-alert-success-icon: var(--ld-color-primitives-blue-150);
        --ld-color-semantic-alert-warning-background: var(--ld-color-primitives-yellow-100);
        --ld-color-semantic-alert-warning-border: var(--ld-color-primitives-yellow-500);
        --ld-color-semantic-alert-warning-icon: var(--ld-color-primitives-yellow-200);
        --ld-color-semantic-alert-error-background: var(--ld-color-primitives-red-100);
        --ld-color-semantic-alert-error-border: var(--ld-color-primitives-red-300);
        --ld-color-semantic-alert-error-icon: var(--ld-color-primitives-red-200);
        --ld-color-semantic-button-primary-background-disabled-hover: var(--ld-color-primitives-grey-200);
        --ld-color-semantic-button-primary-background-disabled: var(--ld-color-primitives-grey-100);
        --ld-color-semantic-button-primary-background-hover: var(--ld-color-primitives-blue-800);
        --ld-color-semantic-button-primary-background: var(--ld-color-primitives-blue-500);
        --ld-color-semantic-button-primary-border-disabled: var(--ld-color-primitives-grey-500);
        --ld-color-semantic-button-secondary-background-hover: var(--ld-color-primitives-blue-100);
        --ld-color-semantic-button-secondary-background: var(--ld-color-primitives-grey-0);
        --ld-color-semantic-button-secondary-border-hover: var(--ld-color-primitives-blue-800);
        --ld-color-semantic-button-secondary-border: var(--ld-color-primitives-blue-500);
        --ld-color-semantic-button-tertiary-border: var(--ld-color-primitives-blue-500);
        --ld-color-semantic-button-tertiary-focus: var(--ld-color-primitives-blue-150);
        --ld-color-semantic-button-tertiary-text-disabled-hover: var(--ld-color-primitives-grey-500);
        --ld-color-semantic-button-tertiary-text-disabled: var(--ld-color-primitives-grey-200);
        --ld-color-semantic-button-tertiary-text-hover: var(--ld-color-primitives-blue-500);
        --ld-color-semantic-button-tertiary-text-icon-only: var(--ld-color-primitives-grey-500);
        --ld-color-semantic-button-tertiary-text: var(--ld-color-primitives-grey-800);
        --ld-color-semantic-field-background-active: var(--ld-color-primitives-blue-100);
        --ld-color-semantic-field-background-disabled: var(--ld-color-primitives-grey-100);
        --ld-color-semantic-field-background-error: var(--ld-color-primitives-red-100);
        --ld-color-semantic-field-background-hover: var(--ld-color-primitives-blue-100);
        --ld-color-semantic-field-background-valid: var(--ld-color-primitives-green-100);
        --ld-color-semantic-field-background: var(--ld-color-primitives-grey-0);
        --ld-color-semantic-field-border-disabled: var(--ld-color-primitives-grey-200);
        --ld-color-semantic-field-border: var(--ld-color-primitives-grey-150);
        --ld-color-semantic-field-border-error: var(--ld-color-primitives-red-200);
        --ld-color-semantic-field-border-valid: var(--ld-color-primitives-green-200);
        --ld-color-semantic-general-border: var(--ld-color-primitives-grey-140);
        --ld-color-semantic-general-middle-grey: var(--ld-color-primitives-grey-150);
        --ld-color-semantic-general-tab-underline: var(--ld-color-primitives-grey-150);
        --ld-color-semantic-text-body: var(--ld-color-primitives-grey-800);
        --ld-color-semantic-text-body-subtle: var(--ld-color-primitives-grey-500);
        --ld-color-semantic-text-button-primary: var(--ld-color-primitives-grey-0);
        --ld-color-semantic-text-button-primary-disabled: var(--ld-color-primitives-grey-800);
        --ld-color-semantic-text-button-primary-disabled-hover: var(--ld-color-primitives-grey-900);
        --ld-color-semantic-text-button-secondary-disabled-hover: var(--ld-color-primitives-grey-900);
        --ld-color-semantic-text-link: var(--ld-color-primitives-blue-500);
        --ld-color-semantic-text-link-hover: var(--ld-color-primitives-blue-800)
    }

    :root {
        --direction-multiplier: 1
    }

    .elementor-screen-only {
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        top: -10000em;
        width: 1px;
        clip: rect(0, 0, 0, 0);
        border: 0
    }

    .elementor *,
    .elementor :after,
    .elementor :before {
        box-sizing: border-box
    }

    .elementor a {
        box-shadow: none;
        text-decoration: none
    }

    .elementor img {
        border: none;
        border-radius: 0;
        box-shadow: none;
        height: auto;
        max-width: 100%
    }

    .elementor .elementor-widget:not(.elementor-widget-text-editor):not(.elementor-widget-theme-post-content) figure {
        margin: 0
    }

    .e-con>.elementor-element.elementor-absolute {
        position: absolute
    }

    .elementor-element.elementor-absolute {
        z-index: 1
    }

    .elementor-element {
        --flex-direction: initial;
        --flex-wrap: initial;
        --justify-content: initial;
        --align-items: initial;
        --align-content: initial;
        --gap: initial;
        --flex-basis: initial;
        --flex-grow: initial;
        --flex-shrink: initial;
        --order: initial;
        --align-self: initial;
        align-self: var(--align-self);
        flex-basis: var(--flex-basis);
        flex-grow: var(--flex-grow);
        flex-shrink: var(--flex-shrink);
        order: var(--order)
    }

    .elementor-invisible {
        visibility: hidden
    }

    .elementor-align-center {
        text-align: center
    }

    .elementor-align-center .elementor-button {
        width: auto
    }

    @media (max-width:767px) {
        .elementor-mobile-align-center {
            text-align: center
        }
    }

    :root {
        --page-title-display: block
    }

    .elementor-section {
        position: relative
    }

    .elementor-section .elementor-container {
        display: flex;
        margin-inline: auto;
        position: relative
    }

    @media (max-width:1024px) {
        .elementor-section .elementor-container {
            flex-wrap: wrap
        }
    }

    .elementor-widget-wrap {
        align-content: flex-start;
        flex-wrap: wrap;
        position: relative;
        width: 100%
    }

    .elementor:not(.elementor-bc-flex-widget) .elementor-widget-wrap {
        display: flex
    }

    .elementor-widget-wrap>.elementor-element {
        width: 100%
    }

    .elementor-widget {
        position: relative
    }

    .elementor-widget:not(:last-child) {
        margin-block-end: var(--kit-widget-spacing, 20px)
    }

    .elementor-widget:not(:last-child).elementor-widget__width-initial {
        margin-block-end: 0
    }

    .elementor-column {
        display: flex;
        min-height: 1px;
        position: relative
    }

    .elementor-column-gap-default>.elementor-column>.elementor-element-populated {
        padding: 10px
    }

    @media (min-width:768px) {
        .elementor-column.elementor-col-100 {
            width: 100%
        }
    }

    @media (max-width:767px) {
        .elementor-column {
            width: 100%
        }
    }

    @media (prefers-reduced-motion:no-preference) {
        html {
            scroll-behavior: smooth
        }
    }

    .e-con {
        --border-radius: 0;
        --border-top-width: 0px;
        --border-right-width: 0px;
        --border-bottom-width: 0px;
        --border-left-width: 0px;
        --border-style: initial;
        --border-color: initial;
        --container-widget-width: 100%;
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --content-width: min(100%, var(--container-max-width, 1140px));
        --width: 100%;
        --min-height: initial;
        --height: auto;
        --text-align: initial;
        --margin-top: 0px;
        --margin-right: 0px;
        --margin-bottom: 0px;
        --margin-left: 0px;
        --padding-top: var(--container-default-padding-top, 10px);
        --padding-right: var(--container-default-padding-right, 10px);
        --padding-bottom: var(--container-default-padding-bottom, 10px);
        --padding-left: var(--container-default-padding-left, 10px);
        --position: relative;
        --z-index: revert;
        --overflow: visible;
        --gap: var(--widgets-spacing, 20px);
        --row-gap: var(--widgets-spacing-row, 20px);
        --column-gap: var(--widgets-spacing-column, 20px);
        --overlay-mix-blend-mode: initial;
        --overlay-opacity: 1;
        --e-con-grid-template-columns: repeat(3, 1fr);
        --e-con-grid-template-rows: repeat(2, 1fr);
        border-radius: var(--border-radius);
        height: var(--height);
        min-height: var(--min-height);
        min-width: 0;
        overflow: var(--overflow);
        position: var(--position);
        width: var(--width);
        z-index: var(--z-index);
        --flex-wrap-mobile: wrap
    }

    .e-con {
        --margin-block-start: var(--margin-top);
        --margin-block-end: var(--margin-bottom);
        --margin-inline-start: var(--margin-left);
        --margin-inline-end: var(--margin-right);
        --padding-inline-start: var(--padding-left);
        --padding-inline-end: var(--padding-right);
        --padding-block-start: var(--padding-top);
        --padding-block-end: var(--padding-bottom);
        --border-block-start-width: var(--border-top-width);
        --border-block-end-width: var(--border-bottom-width);
        --border-inline-start-width: var(--border-left-width);
        --border-inline-end-width: var(--border-right-width)
    }

    .e-con {
        margin-block-end: var(--margin-block-end);
        margin-block-start: var(--margin-block-start);
        margin-inline-end: var(--margin-inline-end);
        margin-inline-start: var(--margin-inline-start);
        padding-inline-end: var(--padding-inline-end);
        padding-inline-start: var(--padding-inline-start)
    }

    .e-con.e-flex {
        --flex-direction: column;
        --flex-basis: auto;
        --flex-grow: 0;
        --flex-shrink: 1;
        flex: var(--flex-grow) var(--flex-shrink) var(--flex-basis)
    }

    .e-con-full,
    .e-con>.e-con-inner {
        padding-block-end: var(--padding-block-end);
        padding-block-start: var(--padding-block-start);
        text-align: var(--text-align)
    }

    .e-con-full.e-flex,
    .e-con.e-flex>.e-con-inner {
        flex-direction: var(--flex-direction)
    }

    .e-con,
    .e-con>.e-con-inner {
        display: var(--display)
    }

    .e-con-boxed.e-flex {
        align-content: normal;
        align-items: normal;
        flex-direction: column;
        flex-wrap: nowrap;
        justify-content: normal
    }

    .e-con-boxed {
        gap: initial;
        text-align: initial
    }

    .e-con.e-flex>.e-con-inner {
        align-content: var(--align-content);
        align-items: var(--align-items);
        align-self: auto;
        flex-basis: auto;
        flex-grow: 1;
        flex-shrink: 1;
        flex-wrap: var(--flex-wrap);
        justify-content: var(--justify-content)
    }

    .e-con>.e-con-inner {
        gap: var(--row-gap) var(--column-gap);
        height: 100%;
        margin: 0 auto;
        max-width: var(--content-width);
        padding-inline-end: 0;
        padding-inline-start: 0;
        width: 100%
    }

    .e-con .elementor-widget.elementor-widget {
        margin-block-end: 0
    }

    .e-con:before {
        border-block-end-width: var(--border-block-end-width);
        border-block-start-width: var(--border-block-start-width);
        border-color: var(--border-color);
        border-inline-end-width: var(--border-inline-end-width);
        border-inline-start-width: var(--border-inline-start-width);
        border-radius: var(--border-radius);
        border-style: var(--border-style);
        content: var(--background-overlay);
        display: block;
        height: max(100% + var(--border-top-width) + var(--border-bottom-width), 100%);
        left: calc(0px - var(--border-left-width));
        mix-blend-mode: var(--overlay-mix-blend-mode);
        opacity: var(--overlay-opacity);
        position: absolute;
        top: calc(0px - var(--border-top-width));
        width: max(100% + var(--border-left-width) + var(--border-right-width), 100%)
    }

    .e-con .elementor-widget {
        min-width: 0
    }

    .e-con>.e-con-inner>.elementor-widget>.elementor-widget-container,
    .e-con>.elementor-widget>.elementor-widget-container {
        height: 100%
    }

    .e-con.e-con>.e-con-inner>.elementor-widget,
    .elementor.elementor .e-con>.elementor-widget {
        max-width: 100%
    }

    .e-con .elementor-widget:not(:last-child) {
        --kit-widget-spacing: 0px
    }

    @media (max-width:767px) {
        .e-con.e-flex {
            --width: 100%;
            --flex-wrap: var(--flex-wrap-mobile)
        }
    }

    .elementor-heading-title {
        line-height: 1;
        margin: 0;
        padding: 0
    }

    .elementor-button {
        background-color: #69727d;
        border-radius: 3px;
        color: #fff;
        display: inline-block;
        fill: #fff;
        font-size: 15px;
        line-height: 1;
        padding: 12px 24px;
        text-align: center
    }

    .elementor-button:visited {
        color: #fff
    }

    .elementor-button-content-wrapper {
        display: flex;
        flex-direction: row;
        gap: 5px;
        justify-content: center
    }

    .elementor-button-icon {
        align-items: center;
        display: flex
    }

    .elementor-button-icon svg {
        height: auto;
        width: 1em
    }

    .elementor-button-icon .e-font-icon-svg {
        height: 1em
    }

    .elementor-button-text {
        display: inline-block
    }

    .elementor-button.elementor-size-md {
        border-radius: 4px;
        font-size: 16px;
        padding: 15px 30px
    }

    .elementor-button span {
        text-decoration: inherit
    }

    .elementor-icon {
        color: #69727d;
        display: inline-block;
        font-size: 50px;
        line-height: 1;
        text-align: center
    }

    .elementor-icon svg {
        display: block;
        height: 1em;
        position: relative;
        width: 1em
    }

    .elementor-icon svg:before {
        left: 50%;
        position: absolute;
        transform: translateX(-50%)
    }

    @media (max-width:767px) {
        .elementor .elementor-hidden-mobile {
            display: none
        }
    }

    @media (min-width:768px) and (max-width:1024px) {
        .elementor .elementor-hidden-tablet {
            display: none
        }
    }

    @media (min-width:1025px) and (max-width:99999px) {
        .elementor .elementor-hidden-desktop {
            display: none
        }
    }

    .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
        color: inherit;
        font-size: inherit;
        line-height: inherit
    }

    .ob-has-background-overlay {
        position: relative
    }

    .ob-has-background-overlay:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1
    }

    .ob-has-background-overlay:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1
    }

    .elementor-widget-icon {
        line-height: 0
    }

    .elementor-widget-image,
    .elementor-widget-image>div,
    .elementor-widget-image img {
        line-height: 0
    }

    .elementor-widget-image {
        text-align: center
    }

    .elementor-widget-image a {
        display: inline-block
    }

    .elementor-widget-image a img[src$=".svg"] {
        width: 48px
    }

    .elementor-widget-image img {
        display: inline-block;
        vertical-align: middle
    }

    .elementor-widget .elementor-icon-list-items {
        list-style-type: none;
        margin: 0;
        padding: 0
    }

    .elementor-widget .elementor-icon-list-item {
        margin: 0;
        padding: 0;
        position: relative
    }

    .elementor-widget .elementor-icon-list-item:after {
        inset-block-end: 0;
        position: absolute;
        width: 100%
    }

    .elementor-widget .elementor-icon-list-item,
    .elementor-widget .elementor-icon-list-item a {
        align-items: var(--icon-vertical-align, center);
        display: flex;
        font-size: inherit
    }

    .elementor-widget .elementor-icon-list-icon+.elementor-icon-list-text {
        align-self: center;
        padding-inline-start: 5px
    }

    .elementor-widget .elementor-icon-list-icon {
        display: flex;
        inset-block-start: var(--icon-vertical-offset, initial);
        position: relative
    }

    .elementor-widget .elementor-icon-list-icon svg {
        height: var(--e-icon-list-icon-size, 1em);
        width: var(--e-icon-list-icon-size, 1em)
    }

    .elementor-widget.elementor-widget-icon-list .elementor-icon-list-icon {
        text-align: var(--e-icon-list-icon-align)
    }

    .elementor-widget.elementor-widget-icon-list .elementor-icon-list-icon svg {
        margin: var(--e-icon-list-icon-margin, 0 calc(var(--e-icon-list-icon-size, 1em) * .25) 0 0)
    }

    .elementor-widget.elementor-align-end .elementor-icon-list-item,
    .elementor-widget.elementor-align-end .elementor-icon-list-item a {
        justify-content: end;
        text-align: end
    }

    .elementor-widget.elementor-align-end .elementor-icon-list-items {
        justify-content: end
    }

    .elementor-widget:not(.elementor-align-start) .elementor-icon-list-item:after {
        inset-inline-end: 0
    }

    @media (min-width:-1) {
        .elementor-widget:not(.elementor-widescreen-align-end) .elementor-icon-list-item:after {
            inset-inline-start: 0
        }

        .elementor-widget:not(.elementor-widescreen-align-start) .elementor-icon-list-item:after {
            inset-inline-end: 0
        }
    }

    @media (max-width:-1) {
        .elementor-widget:not(.elementor-laptop-align-end) .elementor-icon-list-item:after {
            inset-inline-start: 0
        }

        .elementor-widget:not(.elementor-laptop-align-start) .elementor-icon-list-item:after {
            inset-inline-end: 0
        }

        .elementor-widget:not(.elementor-tablet_extra-align-end) .elementor-icon-list-item:after {
            inset-inline-start: 0
        }

        .elementor-widget:not(.elementor-tablet_extra-align-start) .elementor-icon-list-item:after {
            inset-inline-end: 0
        }
    }

    @media (max-width:1024px) {
        .elementor-widget:not(.elementor-tablet-align-end) .elementor-icon-list-item:after {
            inset-inline-start: 0
        }

        .elementor-widget:not(.elementor-tablet-align-start) .elementor-icon-list-item:after {
            inset-inline-end: 0
        }
    }

    @media (max-width:-1) {
        .elementor-widget:not(.elementor-mobile_extra-align-end) .elementor-icon-list-item:after {
            inset-inline-start: 0
        }

        .elementor-widget:not(.elementor-mobile_extra-align-start) .elementor-icon-list-item:after {
            inset-inline-end: 0
        }
    }

    @media (max-width:767px) {

        .elementor-widget.elementor-mobile-align-center .elementor-icon-list-item,
        .elementor-widget.elementor-mobile-align-center .elementor-icon-list-item a {
            justify-content: center
        }

        .elementor-widget.elementor-mobile-align-center .elementor-icon-list-item:after {
            margin: auto
        }

        .elementor-widget:not(.elementor-mobile-align-end) .elementor-icon-list-item:after {
            inset-inline-start: 0
        }

        .elementor-widget:not(.elementor-mobile-align-start) .elementor-icon-list-item:after {
            inset-inline-end: 0
        }
    }

    .elementor .elementor-element ul.elementor-icon-list-items {
        padding: 0
    }

    .elementor-image-gallery .gallery-item {
        display: inline-block;
        margin: 0 auto;
        max-width: 100%;
        text-align: center;
        vertical-align: top;
        width: 100%
    }

    .elementor-image-gallery .gallery-item img {
        margin: 0 auto
    }

    .elementor-image-gallery figure img {
        display: block
    }

    .gallery-spacing-custom .elementor-image-gallery .gallery-icon {
        padding: 0
    }

    @media (min-width:768px) {
        .elementor-image-gallery .gallery-columns-6 .gallery-item {
            max-width: 16.666%
        }
    }

    @media (min-width:480px) and (max-width:767px) {
        .elementor-image-gallery .gallery.gallery-columns-6 .gallery-item {
            max-width: 50%
        }
    }

    @media (max-width:479px) {
        .elementor-image-gallery .gallery.gallery-columns-6 .gallery-item {
            max-width: 100%
        }
    }

    html,
    body {
        -webkit-backface-visibility: hidden
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkc3kawzu.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkankawzu.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcnkawzu.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbxkawzu.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkenkawzu.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkahkawzu.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcxkawzu.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkchkawzu.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbnka.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkc3kawzu.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkankawzu.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcnkawzu.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbxkawzu.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkenkawzu.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkahkawzu.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcxkawzu.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkchkawzu.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbnka.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkc3kawzu.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkankawzu.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcnkawzu.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbxkawzu.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkenkawzu.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkahkawzu.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcxkawzu.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkchkawzu.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbnka.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkc3kawzu.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkankawzu.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcnkawzu.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbxkawzu.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkenkawzu.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkahkawzu.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcxkawzu.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkchkawzu.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbnka.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkc3kawzu.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkankawzu.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcnkawzu.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbxkawzu.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkenkawzu.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkahkawzu.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcxkawzu.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkchkawzu.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbnka.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkc3kawzu.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkankawzu.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcnkawzu.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbxkawzu.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkenkawzu.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkahkawzu.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcxkawzu.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkchkawzu.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbnka.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkc3kawzu.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkankawzu.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcnkawzu.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbxkawzu.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkenkawzu.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkahkawzu.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcxkawzu.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkchkawzu.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbnka.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkc3kawzu.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkankawzu.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcnkawzu.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbxkawzu.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkenkawzu.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkahkawzu.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcxkawzu.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkchkawzu.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbnka.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkc3kawzu.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkankawzu.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcnkawzu.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbxkawzu.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkenkawzu.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkahkawzu.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkcxkawzu.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkchkawzu.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo5cnqeu92fr1mu53zec9_vu3r1gihoszmkbnka.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3gubgee.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3iubgee.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3cubgee.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3-ubgee.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamawcubgee.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamaxkubgee.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3oubgee.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3kubgee.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 100;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3yuba.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3gubgee.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3iubgee.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3cubgee.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3-ubgee.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamawcubgee.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamaxkubgee.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3oubgee.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3kubgee.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 200;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3yuba.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3gubgee.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3iubgee.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3cubgee.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3-ubgee.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamawcubgee.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamaxkubgee.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3oubgee.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3kubgee.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3yuba.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3gubgee.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3iubgee.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3cubgee.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3-ubgee.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamawcubgee.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamaxkubgee.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3oubgee.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3kubgee.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3yuba.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3gubgee.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3iubgee.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3cubgee.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3-ubgee.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamawcubgee.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamaxkubgee.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3oubgee.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3kubgee.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3yuba.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3gubgee.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3iubgee.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3cubgee.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3-ubgee.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamawcubgee.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamaxkubgee.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3oubgee.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3kubgee.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3yuba.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3gubgee.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3iubgee.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3cubgee.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3-ubgee.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamawcubgee.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamaxkubgee.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3oubgee.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3kubgee.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3yuba.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3gubgee.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3iubgee.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3cubgee.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3-ubgee.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamawcubgee.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamaxkubgee.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3oubgee.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3kubgee.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3yuba.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3gubgee.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3iubgee.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3cubgee.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3-ubgee.woff2) format('woff2');
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamawcubgee.woff2) format('woff2');
        unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluamaxkubgee.woff2) format('woff2');
        unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3oubgee.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3kubgee.woff2) format('woff2');
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 900;
        font-stretch: 100%;
        font-display: swap;
        src: url(https://spines.com/wp-content/uploads/elementor/google-fonts/fonts/roboto-kfo7cnqeu92fr1me7ksn66agldtyluama3yuba.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    button.pswp__button {
        box-shadow: none !important;
        background-image: var(--wpr-bg-852817be-ae5e-4fcc-93dc-204f4cad807c) !important
    }

    button.pswp__button,
    button.pswp__button--arrow--left::before,
    button.pswp__button--arrow--right::before {
        background-color: transparent !important
    }

    button.pswp__button--arrow--left,
    button.pswp__button--arrow--right {
        background-image: none !important
    }

    .pswp {
        display: none;
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        overflow: hidden;
        -ms-touch-action: none;
        touch-action: none;
        z-index: 1500;
        -webkit-text-size-adjust: 100%;
        -webkit-backface-visibility: hidden;
        outline: 0
    }

    .pswp * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    .pswp__bg {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: #000;
        opacity: 0;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-backface-visibility: hidden;
        will-change: opacity
    }

    .pswp__scroll-wrap {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: hidden
    }

    .pswp__container {
        -ms-touch-action: none;
        touch-action: none;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0
    }

    .pswp__container {
        -webkit-touch-callout: none
    }

    .pswp__bg {
        will-change: opacity
    }

    .pswp__container {
        -webkit-backface-visibility: hidden
    }

    .pswp__item {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        overflow: hidden
    }

    .pswp__button {
        width: 44px;
        height: 44px;
        position: relative;
        background: 0 0;
        overflow: visible;
        -webkit-appearance: none;
        display: block;
        border: 0;
        padding: 0;
        margin: 0;
        float: left;
        opacity: .75;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .pswp__button::-moz-focus-inner {
        padding: 0;
        border: 0
    }

    .pswp__button,
    .pswp__button--arrow--left:before,
    .pswp__button--arrow--right:before {
        background: var(--wpr-bg-416cd3a9-86f4-421b-aa8c-a812cebc94fa) 0 0 no-repeat;
        background-size: 264px 88px;
        width: 44px;
        height: 44px
    }

    .pswp__button--close {
        background-position: 0 -44px
    }

    .pswp__button--share {
        background-position: -44px -44px
    }

    .pswp__button--fs {
        display: none
    }

    .pswp__button--zoom {
        display: none;
        background-position: -88px 0
    }

    .pswp__button--arrow--left,
    .pswp__button--arrow--right {
        background: 0 0;
        top: 50%;
        margin-top: -50px;
        width: 70px;
        height: 100px;
        position: absolute
    }

    .pswp__button--arrow--left {
        left: 0
    }

    .pswp__button--arrow--right {
        right: 0
    }

    .pswp__button--arrow--left:before,
    .pswp__button--arrow--right:before {
        content: '';
        top: 35px;
        background-color: rgba(0, 0, 0, .3);
        height: 30px;
        width: 32px;
        position: absolute
    }

    .pswp__button--arrow--left:before {
        left: 6px;
        background-position: -138px -44px
    }

    .pswp__button--arrow--right:before {
        right: 6px;
        background-position: -94px -44px
    }

    .pswp__share-modal {
        display: block;
        background: rgba(0, 0, 0, .5);
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        padding: 10px;
        position: absolute;
        z-index: 1600;
        opacity: 0;
        -webkit-backface-visibility: hidden;
        will-change: opacity
    }

    .pswp__share-modal--hidden {
        display: none
    }

    .pswp__share-tooltip {
        z-index: 1620;
        position: absolute;
        background: #fff;
        top: 56px;
        border-radius: 2px;
        display: block;
        width: auto;
        right: 44px;
        -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, .25);
        box-shadow: 0 2px 5px rgba(0, 0, 0, .25);
        -webkit-transform: translateY(6px);
        -ms-transform: translateY(6px);
        transform: translateY(6px);
        -webkit-backface-visibility: hidden;
        will-change: transform
    }

    .pswp__counter {
        position: relative;
        left: 0;
        top: 0;
        height: 44px;
        font-size: 13px;
        line-height: 44px;
        color: #fff;
        opacity: .75;
        padding: 0 10px;
        margin-inline-end: auto
    }

    .pswp__caption {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        min-height: 44px
    }

    .pswp__caption__center {
        text-align: left;
        max-width: 420px;
        margin: 0 auto;
        font-size: 13px;
        padding: 10px;
        line-height: 20px;
        color: #ccc
    }

    .pswp__preloader {
        width: 44px;
        height: 44px;
        position: absolute;
        top: 0;
        left: 50%;
        margin-left: -22px;
        opacity: 0;
        will-change: opacity;
        direction: ltr
    }

    .pswp__preloader__icn {
        width: 20px;
        height: 20px;
        margin: 12px
    }

    @media screen and (max-width:1024px) {
        .pswp__preloader {
            position: relative;
            left: auto;
            top: auto;
            margin: 0;
            float: right
        }
    }

    .pswp__ui {
        -webkit-font-smoothing: auto;
        visibility: visible;
        opacity: 1;
        z-index: 1550
    }

    .pswp__top-bar {
        position: absolute;
        left: 0;
        top: 0;
        height: 44px;
        width: 100%;
        display: flex;
        justify-content: flex-end
    }

    .pswp__caption,
    .pswp__top-bar {
        -webkit-backface-visibility: hidden;
        will-change: opacity
    }

    .pswp__caption,
    .pswp__top-bar {
        background-color: rgba(0, 0, 0, .5)
    }

    .pswp__ui--hidden .pswp__button--arrow--left,
    .pswp__ui--hidden .pswp__button--arrow--right,
    .pswp__ui--hidden .pswp__caption,
    .pswp__ui--hidden .pswp__top-bar {
        opacity: .001
    }
</style>

<style id='safe-svg-svg-icon-style-inline-css'>
    .safe-svg-cover {
        text-align: center
    }

    .safe-svg-cover .safe-svg-inside {
        display: inline-block;
        max-width: 100%
    }

    .safe-svg-cover svg {
        fill: currentColor;
        height: 100%;
        max-height: 100%;
        max-width: 100%;
        width: 100%
    }

    /*# sourceURL=https://spines.com/wp-content/plugins/safe-svg/dist/safe-svg-block-frontend.css */
</style>
<style id='global-styles-inline-css'>
    :root {
        --wp--preset--aspect-ratio--square: 1;
        --wp--preset--aspect-ratio--4-3: 4/3;
        --wp--preset--aspect-ratio--3-4: 3/4;
        --wp--preset--aspect-ratio--3-2: 3/2;
        --wp--preset--aspect-ratio--2-3: 2/3;
        --wp--preset--aspect-ratio--16-9: 16/9;
        --wp--preset--aspect-ratio--9-16: 9/16;
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgb(6, 147, 227) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgb(252, 185, 0) 0%, rgb(255, 105, 0) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgb(255, 105, 0) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);
        --wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);
    }

    :root {
        --wp--style--global--content-size: 800px;
        --wp--style--global--wide-size: 1200px;
    }

    :where(body) {
        margin: 0;
    }

    .wp-site-blocks>.alignleft {
        float: left;
        margin-right: 2em;
    }

    .wp-site-blocks>.alignright {
        float: right;
        margin-left: 2em;
    }

    .wp-site-blocks>.aligncenter {
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
    }

    :where(.wp-site-blocks)>* {
        margin-block-start: 24px;
        margin-block-end: 0;
    }

    :where(.wp-site-blocks)> :first-child {
        margin-block-start: 0;
    }

    :where(.wp-site-blocks)> :last-child {
        margin-block-end: 0;
    }

    :root {
        --wp--style--block-gap: 24px;
    }

    :root :where(.is-layout-flow)> :first-child {
        margin-block-start: 0;
    }

    :root :where(.is-layout-flow)> :last-child {
        margin-block-end: 0;
    }

    :root :where(.is-layout-flow)>* {
        margin-block-start: 24px;
        margin-block-end: 0;
    }

    :root :where(.is-layout-constrained)> :first-child {
        margin-block-start: 0;
    }

    :root :where(.is-layout-constrained)> :last-child {
        margin-block-end: 0;
    }

    :root :where(.is-layout-constrained)>* {
        margin-block-start: 24px;
        margin-block-end: 0;
    }

    :root :where(.is-layout-flex) {
        gap: 24px;
    }

    :root :where(.is-layout-grid) {
        gap: 24px;
    }

    .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    .is-layout-flex> :is(*, div) {
        margin: 0;
    }

    body .is-layout-grid {
        display: grid;
    }

    .is-layout-grid> :is(*, div) {
        margin: 0;
    }

    body {
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
    }

    a:where(:not(.wp-element-button)) {
        text-decoration: underline;
    }

    :root :where(.wp-element-button, .wp-block-button__link) {
        background-color: #32373c;
        border-width: 0;
        color: #fff;
        font-family: inherit;
        font-size: inherit;
        font-style: inherit;
        font-weight: inherit;
        letter-spacing: inherit;
        line-height: inherit;
        padding-top: calc(0.667em + 2px);
        padding-right: calc(1.333em + 2px);
        padding-bottom: calc(0.667em + 2px);
        padding-left: calc(1.333em + 2px);
        text-decoration: none;
        text-transform: inherit;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    :root :where(.wp-block-pullquote) {
        font-size: 1.5em;
        line-height: 1.6;
    }

    /*# sourceURL=global-styles-inline-css */
</style>

<style id='elementor-frontend-inline-css'>
    .elementor-kit-5 {
        --e-global-color-primary: #4B4C4D;
        --e-global-color-secondary: #4B4C4D;
        --e-global-color-text: #54595F;
        --e-global-color-accent: #48B88A;
        --e-global-color-6a41634: #EDF8F4;
        --e-global-color-ca85951: #FF4588;
        --e-global-color-da5974a: #131313;
        --e-global-color-95073f8: #138576;
        --e-global-color-aad9770: #1C5B5E;
        --e-global-color-d5b5f94: #979797;
        --e-global-color-e6f6593: #19D3A8;
        --e-global-color-b9cd631: #138576;
        --e-global-color-1a18ee8: #173A36;
        --e-global-color-e26dbc8: #EAFCF5;
        --e-global-color-a55e40b: #C8DED6;
        --e-global-color-9b073bb: #19D1A7;
        --e-global-color-c82f4be: #DCDCDC;
        --e-global-typography-primary-font-family: "DM Sans";
        --e-global-typography-primary-font-weight: 400;
        --e-global-typography-secondary-font-family: "Sentient";
        --e-global-typography-secondary-font-weight: 500;
        --e-global-typography-text-font-family: "DM Sans";
        --e-global-typography-text-font-weight: 400;
        --e-global-typography-accent-font-family: "DM Sans";
        --e-global-typography-accent-font-weight: 400;
        --e-global-typography-2251dbd-font-family: "Merriweather";
        --e-global-typography-2251dbd-font-weight: 700;
        font-family: "DM Sans", Sans-serif;
    }

    .elementor-kit-5 e-page-transition {
        background-color: #FFBC7D;
    }

    .elementor-kit-5 a {
        color: #1DB996;
        text-decoration: none;
    }

    .elementor-kit-5 a:hover {
        color: #209F6B;
    }

    body {
        overflow-x: inherit !important;
    }

    .elementor a,
    .elementor a:link,
    .elementor a:focus,
    .elementor a:active,
    .elementor a:hover {
        text-decoration: inherit !important;
    }

    .elementor a:link,
    .elementor .smooth-hover a:link,
    {
    transition: inherit;
    }

    .elementor-section.elementor-section-boxed>.elementor-container {
        max-width: 1220px;
    }

    .e-con {
        --container-max-width: 1220px;
    }

    .elementor-widget:not(:last-child) {
        margin-block-end: 0px;
    }

    .elementor-element {
        --widgets-spacing: 0px 0px;
        --widgets-spacing-row: 0px;
        --widgets-spacing-column: 0px;
    }

        {}

    h1.entry-title {
        display: var(--page-title-display);
    }

    @media(max-width:1024px) {
        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1024px;
        }

        .e-con {
            --container-max-width: 1024px;
        }
    }

    @media(max-width:767px) {
        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 770px;
        }

        .e-con {
            --container-max-width: 770px;
        }
    }

    /* Start custom CSS */

    .woocommerce .woocommerce-NoticeGroup-checkout,
    .woocommerce .woocommerce-notices-wrapper {
        position: static;
        width: 100%;
        max-width: 1505px;
        margin: 0 auto;
    }

    /* End custom CSS */

    /* Start Custom Fonts CSS */

    @font-face {
        font-family: 'Sentient';
        font-style: normal;
        font-weight: normal;
        font-display: auto;
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Regular.eot');
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Regular.eot?#iefix') format('embedded-opentype'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Regular.woff2') format('woff2'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Regular.woff') format('woff'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Regular.ttf') format('truetype');
    }

    @font-face {
        font-family: 'Sentient';
        font-style: normal;
        font-weight: 500;
        font-display: auto;
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Medium.eot');
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Medium.eot?#iefix') format('embedded-opentype'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Medium.woff2') format('woff2'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Medium.woff') format('woff'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Medium.ttf') format('truetype');
    }

    @font-face {
        font-family: 'Sentient';
        font-style: italic;
        font-weight: normal;
        font-display: auto;
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Italic.eot');
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Italic.eot?#iefix') format('embedded-opentype'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Italic.woff2') format('woff2'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Italic.woff') format('woff'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Italic.ttf') format('truetype');
    }

    @font-face {
        font-family: 'Sentient';
        font-style: normal;
        font-weight: bold;
        font-display: auto;
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Bold.eot');
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Bold.eot?#iefix') format('embedded-opentype'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Bold.woff2') format('woff2'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Bold.woff') format('woff'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Bold.ttf') format('truetype');
    }

    @font-face {
        font-family: 'Sentient';
        font-style: italic;
        font-weight: bold;
        font-display: auto;
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-BoldItalic.eot');
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-BoldItalic.eot?#iefix') format('embedded-opentype'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-BoldItalic.woff2') format('woff2'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-BoldItalic.woff') format('woff'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-BoldItalic.ttf') format('truetype');
    }

    @font-face {
        font-family: 'Sentient';
        font-style: italic;
        font-weight: 500;
        font-display: auto;
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-MediumItalic.eot');
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-MediumItalic.eot?#iefix') format('embedded-opentype'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-MediumItalic.woff2') format('woff2'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-MediumItalic.woff') format('woff'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-MediumItalic.ttf') format('truetype');
    }

    /* End Custom Fonts CSS */

    .elementor-246 .elementor-element.elementor-element-945c4c2 {
        --display: flex;
        --flex-direction: column;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
        --justify-content: center;
        --align-items: center;
        --margin-top: 0px;
        --margin-bottom: 0px;
        --margin-left: 0px;
        --margin-right: 0px;
        --padding-top: 55px;
        --padding-bottom: 90px;
        --padding-left: 20px;
        --padding-right: 20px;
    }

    .elementor-246 .elementor-element.elementor-element-f9a2b16 {
        --display: flex;
        --flex-direction: column;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
        --align-items: center;
        --gap: 0px 0px;
        --row-gap: 0px;
        --column-gap: 0px;
        --padding-top: 0px;
        --padding-bottom: 35px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-246 .elementor-element.elementor-element-166200f {
        --display: flex;
        --position: absolute;
        --border-radius: 50% 50% 50% 50%;
        --padding-top: 0%;
        --padding-bottom: 0%;
        --padding-left: 0%;
        --padding-right: 0%;
        top: 0px;
    }

    .elementor-246 .elementor-element.elementor-element-166200f:not(.elementor-motion-effects-element-type-background),
    .elementor-246 .elementor-element.elementor-element-166200f>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #1CD9AD8F;
    }

    .elementor-246 .elementor-element.elementor-element-166200f.e-con {
        --e-con-transform-translateX: -70%;
        --e-con-transform-translateY: -84%;
    }

    body:not(.rtl) .elementor-246 .elementor-element.elementor-element-166200f {
        left: 0px;
    }

    body.rtl .elementor-246 .elementor-element.elementor-element-166200f {
        right: 0px;
    }

    .elementor-246 .elementor-element.elementor-element-e721ce1 {
        --display: flex;
        --position: absolute;
        --border-radius: 50% 50% 50% 50%;
        --padding-top: 0%;
        --padding-bottom: 0%;
        --padding-left: 0%;
        --padding-right: 0%;
        top: 106%;
    }

    .elementor-246 .elementor-element.elementor-element-e721ce1:not(.elementor-motion-effects-element-type-background),
    .elementor-246 .elementor-element.elementor-element-e721ce1>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #1CD9AD8F;
    }

    .elementor-246 .elementor-element.elementor-element-e721ce1.e-con {
        --e-con-transform-translateX: -53%;
        --e-con-transform-translateY: -63%;
    }

    body:not(.rtl) .elementor-246 .elementor-element.elementor-element-e721ce1 {
        left: 50%;
    }

    body.rtl .elementor-246 .elementor-element.elementor-element-e721ce1 {
        right: 50%;
    }

    .elementor-246 .elementor-element.elementor-element-7a0a531 {
        --display: flex;
        --position: absolute;
        --border-radius: 50% 50% 50% 50%;
        --padding-top: 0%;
        --padding-bottom: 0%;
        --padding-left: 0%;
        --padding-right: 0%;
        top: 0px;
    }

    .elementor-246 .elementor-element.elementor-element-7a0a531:not(.elementor-motion-effects-element-type-background),
    .elementor-246 .elementor-element.elementor-element-7a0a531>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #44A9CF;
    }

    .elementor-246 .elementor-element.elementor-element-7a0a531.e-con {
        --e-con-transform-translateX: 40%;
        --e-con-transform-translateY: -67%;
    }

    body:not(.rtl) .elementor-246 .elementor-element.elementor-element-7a0a531 {
        right: 0%;
    }

    body.rtl .elementor-246 .elementor-element.elementor-element-7a0a531 {
        left: 0%;
    }

    .elementor-246 .elementor-element.elementor-element-6d9a57e>.elementor-widget-container {
        margin: 0px 0px 10px 0px;
        padding: 0px 0px 4px 0px;
        border-style: solid;
        border-width: 0px 0px 1px 0px;
        border-color: #16CEA3;
    }

    .elementor-246 .elementor-element.elementor-element-6d9a57e .elementor-heading-title {
        font-family: "DM Sans", Sans-serif;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        line-height: 1.3em;
        letter-spacing: 1px;
        color: #16CEA3;
    }

    .elementor-246 .elementor-element.elementor-element-eb672df {
        width: var(--container-widget-width, 706px);
        max-width: 706px;
        --container-widget-width: 706px;
        --container-widget-flex-grow: 0;
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-eb672df>.elementor-widget-container {
        margin: 0px 0px 18px 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-246 .elementor-element.elementor-element-eb672df .elementor-heading-title {
        font-family: "Sentient", Sans-serif;
        font-size: 64px;
        font-weight: 500;
        line-height: 1em;
        letter-spacing: -0.06em;
        color: #133B49;
    }

    .elementor-246 .elementor-element.elementor-element-3611ed6.ob-harakiri {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-3611ed6.ob-harakiri .elementor-heading-title {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-3611ed6.ob-harakiri div {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-3611ed6 {
        width: var(--container-widget-width, 686px);
        max-width: 686px;
        --container-widget-width: 686px;
        --container-widget-flex-grow: 0;
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-3611ed6>.elementor-widget-container {
        margin: 0px 0px 20px 0px;
    }

    .elementor-246 .elementor-element.elementor-element-3611ed6 .elementor-heading-title {
        font-family: "DM Sans", Sans-serif;
        font-size: 20px;
        line-height: 1.5em;
        color: #38485C;
    }

    .elementor-246 .elementor-element.elementor-element-3611ed6.ob-harakiri>div,
    .elementor-246 .elementor-element.elementor-element-3611ed6.ob-harakiri>h1,
    .elementor-246 .elementor-element.elementor-element-3611ed6.ob-harakiri>h2,
    .elementor-246 .elementor-element.elementor-element-3611ed6.ob-harakiri>h3,
    .elementor-246 .elementor-element.elementor-element-3611ed6.ob-harakiri>h4,
    .elementor-246 .elementor-element.elementor-element-3611ed6.ob-harakiri>h5,
    .elementor-246 .elementor-element.elementor-element-3611ed6.ob-harakiri>h6,
    .elementor-246 .elementor-element.elementor-element-3611ed6.ob-harakiri>p {
        transform: rotate(0deg);
    }

    .elementor-246 .elementor-element.elementor-element-3611ed6>div {
        text-indent: 0px;
        mix-blend-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-b0be6ed {
        --e-image-carousel-slides-to-show: 1;
        width: var(--container-widget-width, 1170px);
        max-width: 1170px;
        --container-widget-width: 1170px;
        --container-widget-flex-grow: 0;
    }

    .elementor-246 .elementor-element.elementor-element-b0be6ed .elementor-swiper-button.elementor-swiper-button-prev,
    .elementor-246 .elementor-element.elementor-element-b0be6ed .elementor-swiper-button.elementor-swiper-button-next {
        font-size: 22px;
        color: #133B49;
    }

    .elementor-246 .elementor-element.elementor-element-b0be6ed .elementor-swiper-button.elementor-swiper-button-prev svg,
    .elementor-246 .elementor-element.elementor-element-b0be6ed .elementor-swiper-button.elementor-swiper-button-next svg {
        fill: #133B49;
    }

    .elementor-246 .elementor-element.elementor-element-b0be6ed .swiper-pagination-bullet {
        --swiper-pagination-bullet-horizontal-gap: 9px;
        --swiper-pagination-bullet-vertical-gap: 9px;
        width: 8px;
        height: 8px;
        background: #1CD5AA;
    }

    .elementor-246 .elementor-element.elementor-element-b0be6ed .swiper-pagination-bullet:not(.swiper-pagination-bullet-active) {
        background: #F6F7F9;
        opacity: 1;
    }

    .elementor-246 .elementor-element.elementor-element-b0be6ed .elementor-swiper-button.elementor-swiper-button-prev:hover {
        color: #FFFFFF80;
    }

    .elementor-246 .elementor-element.elementor-element-b0be6ed .elementor-swiper-button.elementor-swiper-button-next:hover {
        color: #FFFFFF80;
    }

    .elementor-246 .elementor-element.elementor-element-b0be6ed .elementor-swiper-button-next,
    .elementor-246 .elementor-element.elementor-element-b0be6ed .elementor-swiper-button-prev {
        background-color: #E4EBF554;
        border-radius: 50px 50px 50px 50px;
        padding: 10px;
        margin-top: unset;
        top: calc(50% - 0px);
    }

    .elementor-246 .elementor-element.elementor-element-b0be6ed .elementor-swiper-button-next:hover,
    .elementor-246 .elementor-element.elementor-element-b0be6ed .elementor-swiper-button-prev:hover {
        background-color: #16CEA3;
    }

    .elementor-246 .elementor-element.elementor-element-b0be6ed .elementor-swiper-button-prev {
        left: calc(0% + 30px);
        right: unset;
    }

    .elementor-246 .elementor-element.elementor-element-b0be6ed .elementor-swiper-button-next {
        right: calc(0% + 30px);
        left: unset;
    }

    .elementor-246 .elementor-element.elementor-element-b0be6ed .swiper-pagination-bullets .swiper-pagination-bullet {
        background-color: #FFFFFF78;
    }

    .elementor-246 .elementor-element.elementor-element-b0be6ed .swiper-pagination-bullet.swiper-pagination-bullet-active {
        background-color: #FFFFFF !important;
    }

    .elementor-246 .elementor-element.elementor-element-356297b {
        --display: flex;
        --flex-direction: column;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
        --justify-content: center;
        --align-items: center;
        --margin-top: 0px;
        --margin-bottom: 0px;
        --margin-left: 0px;
        --margin-right: 0px;
        --padding-top: 0px;
        --padding-bottom: 70px;
        --padding-left: 20px;
        --padding-right: 20px;
    }

    .elementor-246 .elementor-element.elementor-element-308b1ab {
        --display: flex;
        --align-items: center;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-246 .elementor-element.elementor-element-0e47241 {
        width: var(--container-widget-width, 706px);
        max-width: 706px;
        --container-widget-width: 706px;
        --container-widget-flex-grow: 0;
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-0e47241>.elementor-widget-container {
        margin: 0px 0px 30px 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-246 .elementor-element.elementor-element-0e47241 .elementor-heading-title {
        font-family: "Sentient", Sans-serif;
        font-size: 56px;
        font-weight: 500;
        line-height: 1em;
        letter-spacing: -0.06em;
        color: #133B49;
    }

    .elementor-246 .elementor-element.elementor-element-4da8cee {
        --display: flex;
        --flex-direction: row;
        --container-widget-width: initial;
        --container-widget-height: 100%;
        --container-widget-flex-grow: 1;
        --container-widget-align-self: stretch;
        --flex-wrap-mobile: wrap;
        --gap: 4% 4%;
        --row-gap: 4%;
        --column-gap: 4%;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-246 .elementor-element.elementor-element-e37f934 .elementor-icon-box-wrapper {
        text-align: start;
        gap: 0px;
    }

    .elementor-246 .elementor-element.elementor-element-e37f934 .elementor-icon-box-title {
        margin-block-end: 3px;
    }

    .elementor-246 .elementor-element.elementor-element-e37f934 .elementor-icon {
        font-size: 64px;
    }

    .elementor-246 .elementor-element.elementor-element-e37f934 .elementor-icon-box-img {
        overflow: hidden;
    }

    .elementor-246 .elementor-element.elementor-element-e37f934 .elementor-icon-box-title,
    .elementor-246 .elementor-element.elementor-element-e37f934 .elementor-icon-box-title a {
        font-size: 20px;
        font-weight: 600;
    }

    .elementor-246 .elementor-element.elementor-element-e37f934 .elementor-icon-box-description {
        font-size: 20px;
    }

    .elementor-246 .elementor-element.elementor-element-cc0172c .elementor-icon-box-wrapper {
        text-align: start;
        gap: 0px;
    }

    .elementor-246 .elementor-element.elementor-element-cc0172c .elementor-icon-box-title {
        margin-block-end: 3px;
    }

    .elementor-246 .elementor-element.elementor-element-cc0172c .elementor-icon {
        font-size: 64px;
    }

    .elementor-246 .elementor-element.elementor-element-cc0172c .elementor-icon-box-img {
        overflow: hidden;
    }

    .elementor-246 .elementor-element.elementor-element-cc0172c .elementor-icon-box-title,
    .elementor-246 .elementor-element.elementor-element-cc0172c .elementor-icon-box-title a {
        font-size: 20px;
        font-weight: 600;
    }

    .elementor-246 .elementor-element.elementor-element-cc0172c .elementor-icon-box-description {
        font-size: 20px;
    }

    .elementor-246 .elementor-element.elementor-element-2b2efa0 .elementor-icon-box-wrapper {
        text-align: start;
        gap: 0px;
    }

    .elementor-246 .elementor-element.elementor-element-2b2efa0 .elementor-icon-box-title {
        margin-block-end: 3px;
    }

    .elementor-246 .elementor-element.elementor-element-2b2efa0 .elementor-icon {
        font-size: 64px;
    }

    .elementor-246 .elementor-element.elementor-element-2b2efa0 .elementor-icon-box-img {
        overflow: hidden;
    }

    .elementor-246 .elementor-element.elementor-element-2b2efa0 .elementor-icon-box-title,
    .elementor-246 .elementor-element.elementor-element-2b2efa0 .elementor-icon-box-title a {
        font-size: 20px;
        font-weight: 600;
    }

    .elementor-246 .elementor-element.elementor-element-2b2efa0 .elementor-icon-box-description {
        font-size: 20px;
    }

    .elementor-246 .elementor-element.elementor-element-6096237 {
        --display: flex;
        --flex-direction: column;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
        --align-items: center;
        --padding-top: 70px;
        --padding-bottom: 70px;
        --padding-left: 20px;
        --padding-right: 20px;
    }

    .elementor-246 .elementor-element.elementor-element-6096237:not(.elementor-motion-effects-element-type-background),
    .elementor-246 .elementor-element.elementor-element-6096237>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #F8F5F1;
    }

    .elementor-246 .elementor-element.elementor-element-933e6e0.ob-harakiri {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-933e6e0.ob-harakiri .elementor-heading-title {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-933e6e0.ob-harakiri div {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-933e6e0 {
        width: var(--container-widget-width, 661px);
        max-width: 661px;
        --container-widget-width: 661px;
        --container-widget-flex-grow: 0;
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-933e6e0>.elementor-widget-container {
        margin: 0px 0px 30px 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-246 .elementor-element.elementor-element-933e6e0 .elementor-heading-title {
        font-size: 32px;
        font-weight: 500;
        line-height: 1em;
        letter-spacing: -0.03em;
        color: #133B49;
    }

    .elementor-246 .elementor-element.elementor-element-933e6e0.ob-harakiri>div,
    .elementor-246 .elementor-element.elementor-element-933e6e0.ob-harakiri>h1,
    .elementor-246 .elementor-element.elementor-element-933e6e0.ob-harakiri>h2,
    .elementor-246 .elementor-element.elementor-element-933e6e0.ob-harakiri>h3,
    .elementor-246 .elementor-element.elementor-element-933e6e0.ob-harakiri>h4,
    .elementor-246 .elementor-element.elementor-element-933e6e0.ob-harakiri>h5,
    .elementor-246 .elementor-element.elementor-element-933e6e0.ob-harakiri>h6,
    .elementor-246 .elementor-element.elementor-element-933e6e0.ob-harakiri>p {
        transform: rotate(0deg);
    }

    .elementor-246 .elementor-element.elementor-element-933e6e0>div {
        text-indent: 0px;
        mix-blend-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-b6a6e88 {
        --display: flex;
        --flex-direction: row;
        --container-widget-width: initial;
        --container-widget-height: 100%;
        --container-widget-flex-grow: 1;
        --container-widget-align-self: stretch;
        --flex-wrap-mobile: wrap;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-246 .elementor-element.elementor-element-8d6a4f5 {
        --display: flex;
        --align-items: center;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 25px;
        --padding-right: 25px;
    }

    .elementor-246 .elementor-element.elementor-element-85cd737>.elementor-widget-container {
        margin: -7px 0px 0px 0px;
    }

    .elementor-246 .elementor-element.elementor-element-85cd737 .elementor-counter {
        flex-direction: column-reverse;
        gap: 5px;
    }

    .elementor-246 .elementor-element.elementor-element-85cd737 .elementor-counter-title {
        justify-content: center;
        color: #38485C;
        line-height: 1.2em;
    }

    .elementor-246 .elementor-element.elementor-element-85cd737 .elementor-counter-number-wrapper {
        color: #38485C;
        font-size: 56px;
        font-weight: 500;
        letter-spacing: -0.04em;
    }

    .elementor-246 .elementor-element.elementor-element-85cd737.ob-use-counterz span[class*="elementor-counter-number"] {
        flex-grow: unset;
    }

    .elementor-246 .elementor-element.elementor-element-85cd737.ob-use-counterz .elementor-counter-number-wrapper {
        justify-content: center;
    }

    .elementor-246 .elementor-element.elementor-element-85cd737.ob-use-counterz .elementor-counter-title {
        justify-content: center;
    }

    .elementor-246 .elementor-element.elementor-element-de51d3a {
        --display: flex;
        --align-items: center;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 25px;
        --padding-right: 25px;
    }

    .elementor-246 .elementor-element.elementor-element-c52cff6>.elementor-widget-container {
        margin: -7px 0px 0px 0px;
    }

    .elementor-246 .elementor-element.elementor-element-c52cff6 .elementor-counter {
        flex-direction: column-reverse;
        gap: 5px;
    }

    .elementor-246 .elementor-element.elementor-element-c52cff6 .elementor-counter-title {
        justify-content: center;
        color: #38485C;
        line-height: 1.2em;
    }

    .elementor-246 .elementor-element.elementor-element-c52cff6 .elementor-counter-number-wrapper {
        gap: 0px;
        color: #38485C;
        font-size: 56px;
        font-weight: 500;
        letter-spacing: -0.04em;
    }

    .elementor-246 .elementor-element.elementor-element-c52cff6.ob-use-counterz span[class*="elementor-counter-number"] {
        flex-grow: unset;
    }

    .elementor-246 .elementor-element.elementor-element-c52cff6.ob-use-counterz .elementor-counter-number-wrapper {
        justify-content: center;
    }

    .elementor-246 .elementor-element.elementor-element-c52cff6.ob-use-counterz .elementor-counter-title {
        justify-content: center;
    }

    .elementor-246 .elementor-element.elementor-element-1da5af8 {
        --display: flex;
        --align-items: center;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 25px;
        --padding-right: 25px;
    }

    .elementor-246 .elementor-element.elementor-element-9328989>.elementor-widget-container {
        margin: -7px 0px 0px 0px;
    }

    .elementor-246 .elementor-element.elementor-element-9328989 .elementor-counter {
        flex-direction: column-reverse;
        gap: 5px;
    }

    .elementor-246 .elementor-element.elementor-element-9328989 .elementor-counter-title {
        justify-content: center;
        color: #38485C;
        line-height: 1.2em;
    }

    .elementor-246 .elementor-element.elementor-element-9328989 .elementor-counter-number-wrapper {
        gap: 0px;
        color: #38485C;
        font-size: 56px;
        font-weight: 500;
        letter-spacing: -0.04em;
    }

    .elementor-246 .elementor-element.elementor-element-9328989.ob-use-counterz span[class*="elementor-counter-number"] {
        flex-grow: unset;
    }

    .elementor-246 .elementor-element.elementor-element-9328989.ob-use-counterz .elementor-counter-number-wrapper {
        justify-content: center;
    }

    .elementor-246 .elementor-element.elementor-element-9328989.ob-use-counterz .elementor-counter-title {
        justify-content: center;
    }

    .elementor-246 .elementor-element.elementor-element-ab04ea4 {
        --display: flex;
        --align-items: center;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 25px;
        --padding-right: 25px;
    }

    .elementor-246 .elementor-element.elementor-element-fe90358>.elementor-widget-container {
        margin: -7px 0px 0px 0px;
    }

    .elementor-246 .elementor-element.elementor-element-fe90358 .elementor-counter {
        flex-direction: column-reverse;
        gap: 5px;
    }

    .elementor-246 .elementor-element.elementor-element-fe90358 .elementor-counter-title {
        justify-content: center;
        color: #38485C;
        line-height: 1.2em;
    }

    .elementor-246 .elementor-element.elementor-element-fe90358 .elementor-counter-number-wrapper {
        gap: 0px;
        color: #38485C;
        font-size: 56px;
        font-weight: 500;
        letter-spacing: -0.04em;
    }

    .elementor-246 .elementor-element.elementor-element-fe90358.ob-use-counterz span[class*="elementor-counter-number"] {
        flex-grow: unset;
    }

    .elementor-246 .elementor-element.elementor-element-fe90358.ob-use-counterz .elementor-counter-number-wrapper {
        justify-content: center;
    }

    .elementor-246 .elementor-element.elementor-element-fe90358.ob-use-counterz .elementor-counter-title {
        justify-content: center;
    }

    .elementor-246 .elementor-element.elementor-element-f933fc9 {
        --display: flex;
        --flex-direction: column;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
        --justify-content: center;
        --align-items: center;
        --overflow: hidden;
        --margin-top: 0px;
        --margin-bottom: 0px;
        --margin-left: 0px;
        --margin-right: 0px;
        --padding-top: 70px;
        --padding-bottom: 70px;
        --padding-left: 20px;
        --padding-right: 20px;
    }

    .elementor-246 .elementor-element.elementor-element-c11b72e {
        --display: flex;
        --flex-direction: column;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
        --align-items: center;
        --gap: 15px 15px;
        --row-gap: 15px;
        --column-gap: 15px;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-246 .elementor-element.elementor-element-1349ee5 {
        --display: flex;
        --position: absolute;
        --border-radius: 50% 50% 50% 50%;
        --padding-top: 0%;
        --padding-bottom: 0%;
        --padding-left: 0%;
        --padding-right: 0%;
        top: 0%;
    }

    .elementor-246 .elementor-element.elementor-element-1349ee5:not(.elementor-motion-effects-element-type-background),
    .elementor-246 .elementor-element.elementor-element-1349ee5>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #1CD9AD8A;
    }

    .elementor-246 .elementor-element.elementor-element-1349ee5.e-con {
        --e-con-transform-translateX: -67%;
        --e-con-transform-translateY: -2%;
    }

    body:not(.rtl) .elementor-246 .elementor-element.elementor-element-1349ee5 {
        left: 50%;
    }

    body.rtl .elementor-246 .elementor-element.elementor-element-1349ee5 {
        right: 50%;
    }

    .elementor-246 .elementor-element.elementor-element-eae23a7 {
        width: var(--container-widget-width, 706px);
        max-width: 706px;
        --container-widget-width: 706px;
        --container-widget-flex-grow: 0;
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-eae23a7>.elementor-widget-container {
        margin: 0px 0px 18px 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-246 .elementor-element.elementor-element-eae23a7 .elementor-heading-title {
        font-family: "Sentient", Sans-serif;
        font-size: 56px;
        font-weight: 500;
        line-height: 1em;
        letter-spacing: -0.06em;
        color: #133B49;
    }

    .elementor-246 .elementor-element.elementor-element-d36cae5.ob-harakiri {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-d36cae5.ob-harakiri .elementor-heading-title {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-d36cae5.ob-harakiri div {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-d36cae5 {
        width: var(--container-widget-width, 873px);
        max-width: 873px;
        --container-widget-width: 873px;
        --container-widget-flex-grow: 0;
        text-align: center;
        font-size: 20px;
        color: #133B49;
    }

    .elementor-246 .elementor-element.elementor-element-d36cae5.ob-harakiri>div,
    .elementor-246 .elementor-element.elementor-element-d36cae5.ob-harakiri>h1,
    .elementor-246 .elementor-element.elementor-element-d36cae5.ob-harakiri>h2,
    .elementor-246 .elementor-element.elementor-element-d36cae5.ob-harakiri>h3,
    .elementor-246 .elementor-element.elementor-element-d36cae5.ob-harakiri>h4,
    .elementor-246 .elementor-element.elementor-element-d36cae5.ob-harakiri>h5,
    .elementor-246 .elementor-element.elementor-element-d36cae5.ob-harakiri>h6,
    .elementor-246 .elementor-element.elementor-element-d36cae5.ob-harakiri>p {
        transform: rotate(0deg);
    }

    .elementor-246 .elementor-element.elementor-element-d36cae5>div {
        text-indent: 0px;
        mix-blend-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-e17e21b {
        width: var(--container-widget-width, 706px);
        max-width: 706px;
        --container-widget-width: 706px;
        --container-widget-flex-grow: 0;
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-e17e21b>.elementor-widget-container {
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-246 .elementor-element.elementor-element-e17e21b .elementor-heading-title {
        font-family: "Sentient", Sans-serif;
        font-size: 32px;
        font-weight: 400;
        font-style: italic;
        line-height: 1em;
        letter-spacing: -0.06em;
        color: #133B49;
    }

    .elementor-246 .elementor-element.elementor-element-6d439b8 {
        --display: flex;
        --flex-direction: column;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
        --align-items: stretch;
        --gap: 10px 10px;
        --row-gap: 10px;
        --column-gap: 10px;
        --margin-top: 0px;
        --margin-bottom: 0px;
        --margin-left: 0px;
        --margin-right: 0px;
        --padding-top: 70px;
        --padding-bottom: 55px;
        --padding-left: 20px;
        --padding-right: 20px;
    }

    .elementor-246 .elementor-element.elementor-element-6e5e8c9.ob-harakiri {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-6e5e8c9.ob-harakiri .elementor-heading-title {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-6e5e8c9.ob-harakiri div {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-6e5e8c9>.elementor-widget-container {
        margin: 0px 0px 25px 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-246 .elementor-element.elementor-element-6e5e8c9 {
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-6e5e8c9 .elementor-heading-title {
        font-size: 56px;
        font-weight: 500;
        letter-spacing: -0.06em;
        color: #133B49;
    }

    .elementor-246 .elementor-element.elementor-element-6e5e8c9.ob-harakiri>div,
    .elementor-246 .elementor-element.elementor-element-6e5e8c9.ob-harakiri>h1,
    .elementor-246 .elementor-element.elementor-element-6e5e8c9.ob-harakiri>h2,
    .elementor-246 .elementor-element.elementor-element-6e5e8c9.ob-harakiri>h3,
    .elementor-246 .elementor-element.elementor-element-6e5e8c9.ob-harakiri>h4,
    .elementor-246 .elementor-element.elementor-element-6e5e8c9.ob-harakiri>h5,
    .elementor-246 .elementor-element.elementor-element-6e5e8c9.ob-harakiri>h6,
    .elementor-246 .elementor-element.elementor-element-6e5e8c9.ob-harakiri>p {
        transform: rotate(0deg);
    }

    .elementor-246 .elementor-element.elementor-element-6e5e8c9>div {
        text-indent: 0px;
        mix-blend-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-28ac2d5 {
        --display: flex;
        --flex-direction: column;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
        --align-items: center;
        --gap: 10px 10px;
        --row-gap: 10px;
        --column-gap: 10px;
        --margin-top: 0px;
        --margin-bottom: 0px;
        --margin-left: 0px;
        --margin-right: 0px;
        --padding-top: 0px;
        --padding-bottom: 55px;
        --padding-left: 20px;
        --padding-right: 20px;
    }

    .elementor-246 .elementor-element.elementor-element-805e60c.ob-harakiri {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-805e60c.ob-harakiri .elementor-heading-title {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-805e60c.ob-harakiri div {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-805e60c {
        width: var(--container-widget-width, 700px);
        max-width: 700px;
        --container-widget-width: 700px;
        --container-widget-flex-grow: 0;
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-805e60c>.elementor-widget-container {
        margin: 0px 0px 25px 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-246 .elementor-element.elementor-element-805e60c .elementor-heading-title {
        font-size: 44px;
        font-weight: 500;
        letter-spacing: -0.06em;
        color: #133B49;
    }

    .elementor-246 .elementor-element.elementor-element-805e60c.ob-harakiri>div,
    .elementor-246 .elementor-element.elementor-element-805e60c.ob-harakiri>h1,
    .elementor-246 .elementor-element.elementor-element-805e60c.ob-harakiri>h2,
    .elementor-246 .elementor-element.elementor-element-805e60c.ob-harakiri>h3,
    .elementor-246 .elementor-element.elementor-element-805e60c.ob-harakiri>h4,
    .elementor-246 .elementor-element.elementor-element-805e60c.ob-harakiri>h5,
    .elementor-246 .elementor-element.elementor-element-805e60c.ob-harakiri>h6,
    .elementor-246 .elementor-element.elementor-element-805e60c.ob-harakiri>p {
        transform: rotate(0deg);
    }

    .elementor-246 .elementor-element.elementor-element-805e60c>div {
        text-indent: 0px;
        mix-blend-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-6c212d8 {
        --display: flex;
        --flex-direction: row;
        --container-widget-width: initial;
        --container-widget-height: 100%;
        --container-widget-flex-grow: 1;
        --container-widget-align-self: stretch;
        --flex-wrap-mobile: wrap;
        --gap: 16px 16px;
        --row-gap: 16px;
        --column-gap: 16px;
        --flex-wrap: wrap;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-246 .elementor-element.elementor-element-375131b .elementor-flip-box__front {
        background-image: var(--wpr-bg-244cd63c-bc37-4b50-be97-7b3c508a5de3);
        background-size: cover;
        border-style: none;
    }

    .elementor-246 .elementor-element.elementor-element-375131b .elementor-flip-box__back {
        background-color: #16CEA3;
        border-style: none;
    }

    .elementor-246 .elementor-element.elementor-element-375131b {
        width: var(--container-widget-width, calc(33.33% - 16px * 2 / 3));
        max-width: calc(33.33% - 16px * 2 / 3);
        --container-widget-width: calc(33.33% - 16px * 2 / 3);
        --container-widget-flex-grow: 0;
    }

    .elementor-246 .elementor-element.elementor-element-375131b .elementor-flip-box {
        height: 310px;
    }

    .elementor-246 .elementor-element.elementor-element-375131b .elementor-flip-box__layer,
    .elementor-246 .elementor-element.elementor-element-375131b .elementor-flip-box__layer__overlay {
        border-radius: 16px;
    }

    .elementor-246 .elementor-element.elementor-element-375131b .elementor-flip-box__front .elementor-flip-box__layer__overlay {
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-375131b .elementor-flip-box__front .elementor-flip-box__layer__title {
        color: #133B49;
        font-size: 32px;
        font-weight: 500;
        line-height: 1.2em;
        letter-spacing: -0.03em;
    }

    .elementor-246 .elementor-element.elementor-element-375131b .elementor-flip-box__back .elementor-flip-box__layer__overlay {
        padding: 10% 14% 10% 14%;
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-375131b .elementor-flip-box__button {
        margin-inline-center: 0;
    }

    .elementor-246 .elementor-element.elementor-element-375131b .elementor-flip-box__back .elementor-flip-box__layer__description {
        color: #133B49;
        font-size: 16px;
    }

    .elementor-246 .elementor-element.elementor-element-8dad0ba .elementor-flip-box__front {
        background-image: var(--wpr-bg-956525c1-7b71-4bf9-89d9-67385408ac34);
        background-size: cover;
        border-style: none;
    }

    .elementor-246 .elementor-element.elementor-element-8dad0ba .elementor-flip-box__back {
        background-color: #16CEA3;
        border-style: none;
    }

    .elementor-246 .elementor-element.elementor-element-8dad0ba {
        width: var(--container-widget-width, calc(33.33% - 16px * 2 / 3));
        max-width: calc(33.33% - 16px * 2 / 3);
        --container-widget-width: calc(33.33% - 16px * 2 / 3);
        --container-widget-flex-grow: 0;
    }

    .elementor-246 .elementor-element.elementor-element-8dad0ba .elementor-flip-box {
        height: 310px;
    }

    .elementor-246 .elementor-element.elementor-element-8dad0ba .elementor-flip-box__layer,
    .elementor-246 .elementor-element.elementor-element-8dad0ba .elementor-flip-box__layer__overlay {
        border-radius: 16px;
    }

    .elementor-246 .elementor-element.elementor-element-8dad0ba .elementor-flip-box__front .elementor-flip-box__layer__overlay {
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-8dad0ba .elementor-flip-box__front .elementor-flip-box__layer__title {
        color: #133B49;
        font-size: 32px;
        font-weight: 500;
        line-height: 1.2em;
        letter-spacing: -0.03em;
    }

    .elementor-246 .elementor-element.elementor-element-8dad0ba .elementor-flip-box__back .elementor-flip-box__layer__overlay {
        padding: 10% 14% 10% 14%;
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-8dad0ba .elementor-flip-box__button {
        margin-inline-center: 0;
    }

    .elementor-246 .elementor-element.elementor-element-8dad0ba .elementor-flip-box__back .elementor-flip-box__layer__description {
        color: #133B49;
        font-size: 16px;
    }

    .elementor-246 .elementor-element.elementor-element-0e33276 .elementor-flip-box__front {
        background-image: var(--wpr-bg-3e2370dc-7ba5-4a8a-9854-30695452447f);
        background-size: cover;
        border-style: none;
    }

    .elementor-246 .elementor-element.elementor-element-0e33276 .elementor-flip-box__back {
        background-color: #16CEA3;
        border-style: none;
    }

    .elementor-246 .elementor-element.elementor-element-0e33276 {
        width: var(--container-widget-width, calc(33.33% - 16px * 2 / 3));
        max-width: calc(33.33% - 16px * 2 / 3);
        --container-widget-width: calc(33.33% - 16px * 2 / 3);
        --container-widget-flex-grow: 0;
    }

    .elementor-246 .elementor-element.elementor-element-0e33276 .elementor-flip-box {
        height: 310px;
    }

    .elementor-246 .elementor-element.elementor-element-0e33276 .elementor-flip-box__layer,
    .elementor-246 .elementor-element.elementor-element-0e33276 .elementor-flip-box__layer__overlay {
        border-radius: 16px;
    }

    .elementor-246 .elementor-element.elementor-element-0e33276 .elementor-flip-box__front .elementor-flip-box__layer__overlay {
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-0e33276 .elementor-flip-box__front .elementor-flip-box__layer__title {
        color: #133B49;
        font-size: 32px;
        font-weight: 500;
        line-height: 1.2em;
        letter-spacing: -0.03em;
    }

    .elementor-246 .elementor-element.elementor-element-0e33276 .elementor-flip-box__back .elementor-flip-box__layer__overlay {
        padding: 10% 14% 10% 14%;
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-0e33276 .elementor-flip-box__button {
        margin-inline-center: 0;
    }

    .elementor-246 .elementor-element.elementor-element-0e33276 .elementor-flip-box__back .elementor-flip-box__layer__description {
        color: #133B49;
        font-size: 16px;
    }

    .elementor-246 .elementor-element.elementor-element-66c9b1c .elementor-flip-box__front {
        background-image: var(--wpr-bg-729696ba-995f-481d-976c-59069177556b);
        background-size: cover;
        border-style: none;
    }

    .elementor-246 .elementor-element.elementor-element-66c9b1c .elementor-flip-box__back {
        background-color: #16CEA3;
        border-style: none;
    }

    .elementor-246 .elementor-element.elementor-element-66c9b1c {
        width: var(--container-widget-width, calc(33.33% - 16px * 2 / 3));
        max-width: calc(33.33% - 16px * 2 / 3);
        --container-widget-width: calc(33.33% - 16px * 2 / 3);
        --container-widget-flex-grow: 0;
    }

    .elementor-246 .elementor-element.elementor-element-66c9b1c .elementor-flip-box {
        height: 310px;
    }

    .elementor-246 .elementor-element.elementor-element-66c9b1c .elementor-flip-box__layer,
    .elementor-246 .elementor-element.elementor-element-66c9b1c .elementor-flip-box__layer__overlay {
        border-radius: 16px;
    }

    .elementor-246 .elementor-element.elementor-element-66c9b1c .elementor-flip-box__front .elementor-flip-box__layer__overlay {
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-66c9b1c .elementor-flip-box__front .elementor-flip-box__layer__title {
        color: #133B49;
        font-size: 32px;
        font-weight: 500;
        line-height: 1.2em;
        letter-spacing: -0.03em;
    }

    .elementor-246 .elementor-element.elementor-element-66c9b1c .elementor-flip-box__back .elementor-flip-box__layer__overlay {
        padding: 10% 14% 10% 14%;
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-66c9b1c .elementor-flip-box__button {
        margin-inline-center: 0;
    }

    .elementor-246 .elementor-element.elementor-element-66c9b1c .elementor-flip-box__back .elementor-flip-box__layer__description {
        color: #133B49;
        font-size: 16px;
    }

    .elementor-246 .elementor-element.elementor-element-9b7739e .elementor-flip-box__front {
        background-image: var(--wpr-bg-26620fed-05d5-417d-abab-685f34c08d58);
        background-size: cover;
        border-style: none;
    }

    .elementor-246 .elementor-element.elementor-element-9b7739e .elementor-flip-box__back {
        background-color: #16CEA3;
        border-style: none;
    }

    .elementor-246 .elementor-element.elementor-element-9b7739e {
        width: var(--container-widget-width, calc(33.33% - 16px * 2 / 3));
        max-width: calc(33.33% - 16px * 2 / 3);
        --container-widget-width: calc(33.33% - 16px * 2 / 3);
        --container-widget-flex-grow: 0;
    }

    .elementor-246 .elementor-element.elementor-element-9b7739e .elementor-flip-box {
        height: 310px;
    }

    .elementor-246 .elementor-element.elementor-element-9b7739e .elementor-flip-box__layer,
    .elementor-246 .elementor-element.elementor-element-9b7739e .elementor-flip-box__layer__overlay {
        border-radius: 16px;
    }

    .elementor-246 .elementor-element.elementor-element-9b7739e .elementor-flip-box__front .elementor-flip-box__layer__overlay {
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-9b7739e .elementor-flip-box__front .elementor-flip-box__layer__title {
        color: #133B49;
        font-size: 32px;
        font-weight: 500;
        line-height: 1.2em;
        letter-spacing: -0.03em;
    }

    .elementor-246 .elementor-element.elementor-element-9b7739e .elementor-flip-box__back .elementor-flip-box__layer__overlay {
        padding: 10% 14% 10% 14%;
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-9b7739e .elementor-flip-box__button {
        margin-inline-center: 0;
    }

    .elementor-246 .elementor-element.elementor-element-9b7739e .elementor-flip-box__back .elementor-flip-box__layer__description {
        color: #133B49;
        font-size: 16px;
    }

    .elementor-246 .elementor-element.elementor-element-7aff230 .elementor-flip-box__front {
        background-image: var(--wpr-bg-2904bc01-a32b-4a02-a918-05abb94791df);
        background-size: cover;
        border-style: none;
    }

    .elementor-246 .elementor-element.elementor-element-7aff230 .elementor-flip-box__back {
        background-color: #16CEA3;
        border-style: none;
    }

    .elementor-246 .elementor-element.elementor-element-7aff230 {
        width: var(--container-widget-width, calc(33.33% - 16px * 2 / 3));
        max-width: calc(33.33% - 16px * 2 / 3);
        --container-widget-width: calc(33.33% - 16px * 2 / 3);
        --container-widget-flex-grow: 0;
    }

    .elementor-246 .elementor-element.elementor-element-7aff230 .elementor-flip-box {
        height: 310px;
    }

    .elementor-246 .elementor-element.elementor-element-7aff230 .elementor-flip-box__layer,
    .elementor-246 .elementor-element.elementor-element-7aff230 .elementor-flip-box__layer__overlay {
        border-radius: 16px;
    }

    .elementor-246 .elementor-element.elementor-element-7aff230 .elementor-flip-box__front .elementor-flip-box__layer__overlay {
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-7aff230 .elementor-flip-box__front .elementor-flip-box__layer__title {
        color: #133B49;
        font-size: 32px;
        font-weight: 500;
        line-height: 1.2em;
        letter-spacing: -0.03em;
    }

    .elementor-246 .elementor-element.elementor-element-7aff230 .elementor-flip-box__back .elementor-flip-box__layer__overlay {
        padding: 10% 14% 10% 14%;
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-7aff230 .elementor-flip-box__button {
        margin-inline-center: 0;
    }

    .elementor-246 .elementor-element.elementor-element-7aff230 .elementor-flip-box__back .elementor-flip-box__layer__description {
        color: #133B49;
        font-size: 16px;
    }

    .elementor-246 .elementor-element.elementor-element-6570d12 {
        --display: flex;
        --flex-direction: column;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
        --align-items: center;
        --gap: 0px 0px;
        --row-gap: 0px;
        --column-gap: 0px;
        --margin-top: 0px;
        --margin-bottom: 70px;
        --margin-left: 0px;
        --margin-right: 0px;
        --padding-top: 70px;
        --padding-bottom: 70px;
        --padding-left: 20px;
        --padding-right: 20px;
    }

    .elementor-246 .elementor-element.elementor-element-6570d12:not(.elementor-motion-effects-element-type-background),
    .elementor-246 .elementor-element.elementor-element-6570d12>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #F6F7F9;
    }

    .elementor-246 .elementor-element.elementor-element-f4484a5>.elementor-widget-container {
        margin: 0px 0px 10px 0px;
        padding: 0px 0px 4px 0px;
        border-style: solid;
        border-width: 0px 0px 1px 0px;
        border-color: #16CEA3;
    }

    .elementor-246 .elementor-element.elementor-element-f4484a5 .elementor-heading-title {
        font-family: "DM Sans", Sans-serif;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        line-height: 1.3em;
        letter-spacing: 1px;
        color: #16CEA3;
    }

    .elementor-246 .elementor-element.elementor-element-2362eb6.ob-harakiri {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-2362eb6.ob-harakiri .elementor-heading-title {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-2362eb6.ob-harakiri div {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-2362eb6 {
        width: var(--container-widget-width, 661px);
        max-width: 661px;
        --container-widget-width: 661px;
        --container-widget-flex-grow: 0;
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-2362eb6>.elementor-widget-container {
        margin: 0px 0px 25px 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-246 .elementor-element.elementor-element-2362eb6 .elementor-heading-title {
        font-size: 44px;
        font-weight: 500;
        line-height: 1em;
        letter-spacing: -0.06em;
        color: #133B49;
    }

    .elementor-246 .elementor-element.elementor-element-2362eb6.ob-harakiri>div,
    .elementor-246 .elementor-element.elementor-element-2362eb6.ob-harakiri>h1,
    .elementor-246 .elementor-element.elementor-element-2362eb6.ob-harakiri>h2,
    .elementor-246 .elementor-element.elementor-element-2362eb6.ob-harakiri>h3,
    .elementor-246 .elementor-element.elementor-element-2362eb6.ob-harakiri>h4,
    .elementor-246 .elementor-element.elementor-element-2362eb6.ob-harakiri>h5,
    .elementor-246 .elementor-element.elementor-element-2362eb6.ob-harakiri>h6,
    .elementor-246 .elementor-element.elementor-element-2362eb6.ob-harakiri>p {
        transform: rotate(0deg);
    }

    .elementor-246 .elementor-element.elementor-element-2362eb6>div {
        text-indent: 0px;
        mix-blend-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-ad6416f.ob-harakiri {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-ad6416f.ob-harakiri .elementor-heading-title {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-ad6416f.ob-harakiri div {
        writing-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-ad6416f {
        width: var(--container-widget-width, 537px);
        max-width: 537px;
        --container-widget-width: 537px;
        --container-widget-flex-grow: 0;
        text-align: center;
    }

    .elementor-246 .elementor-element.elementor-element-ad6416f>.elementor-widget-container {
        margin: 0px 0px 35px 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-246 .elementor-element.elementor-element-ad6416f .elementor-heading-title {
        font-family: "DM Sans", Sans-serif;
        font-size: 20px;
        font-weight: 400;
        line-height: 1.4em;
        color: #4C617B;
    }

    .elementor-246 .elementor-element.elementor-element-ad6416f.ob-harakiri>div,
    .elementor-246 .elementor-element.elementor-element-ad6416f.ob-harakiri>h1,
    .elementor-246 .elementor-element.elementor-element-ad6416f.ob-harakiri>h2,
    .elementor-246 .elementor-element.elementor-element-ad6416f.ob-harakiri>h3,
    .elementor-246 .elementor-element.elementor-element-ad6416f.ob-harakiri>h4,
    .elementor-246 .elementor-element.elementor-element-ad6416f.ob-harakiri>h5,
    .elementor-246 .elementor-element.elementor-element-ad6416f.ob-harakiri>h6,
    .elementor-246 .elementor-element.elementor-element-ad6416f.ob-harakiri>p {
        transform: rotate(0deg);
    }

    .elementor-246 .elementor-element.elementor-element-ad6416f>div {
        text-indent: 0px;
        mix-blend-mode: inherit;
    }

    .elementor-246 .elementor-element.elementor-element-c90bb28 .elementor-button {
        background-color: #1CD5AA;
        font-family: "DM Sans", Sans-serif;
        font-size: 20px;
        font-weight: 600;
        fill: #133B49;
        color: #133B49;
        border-radius: 10px 10px 10px 10px;
        padding: 15px 50px 16px 50px;
    }

    .elementor-246 .elementor-element.elementor-element-c90bb28>.elementor-widget-container {
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-246 .elementor-element.elementor-element-c90bb28 {
        z-index: 1;
    }

    .elementor-246 .elementor-element.elementor-element-c90bb28 .elementor-button-content-wrapper {
        flex-direction: row-reverse;
    }

    .elementor-246 .elementor-element.elementor-element-c90bb28 .elementor-button .elementor-button-content-wrapper {
        gap: 9px;
    }

    html,
    body {
        overflow-x: auto;
    }

    :root {
        --page-title-display: none;
    }

    @media(max-width:1024px) {
        .elementor-246 .elementor-element.elementor-element-945c4c2 {
            --padding-top: 50px;
            --padding-bottom: 60px;
            --padding-left: 20px;
            --padding-right: 20px;
        }

        .elementor-246 .elementor-element.elementor-element-f9a2b16 {
            --flex-wrap: wrap;
            --padding-top: 0px;
            --padding-bottom: 20px;
            --padding-left: 0px;
            --padding-right: 0px;
        }

        .elementor-246 .elementor-element.elementor-element-166200f.e-con {
            --e-con-transform-translateX: -20vw;
        }

        .elementor-246 .elementor-element.elementor-element-e721ce1.e-con {
            --e-con-transform-translateX: -39%;
            --e-con-transform-translateY: -16%;
        }

        .elementor-246 .elementor-element.elementor-element-7a0a531.e-con {
            --e-con-transform-translateX: 2vw;
        }

        .elementor-246 .elementor-element.elementor-element-eb672df .elementor-heading-title {
            font-size: 42px;
        }

        .elementor-246 .elementor-element.elementor-element-356297b {
            --padding-top: 0px;
            --padding-bottom: 60px;
            --padding-left: 20px;
            --padding-right: 20px;
        }

        .elementor-246 .elementor-element.elementor-element-0e47241 .elementor-heading-title {
            font-size: 42px;
        }

        .elementor-246 .elementor-element.elementor-element-e37f934 .elementor-icon-box-title,
        .elementor-246 .elementor-element.elementor-element-e37f934 .elementor-icon-box-title a {
            font-size: 18px;
        }

        .elementor-246 .elementor-element.elementor-element-e37f934 .elementor-icon-box-description {
            font-size: 18px;
        }

        .elementor-246 .elementor-element.elementor-element-cc0172c .elementor-icon-box-title,
        .elementor-246 .elementor-element.elementor-element-cc0172c .elementor-icon-box-title a {
            font-size: 18px;
        }

        .elementor-246 .elementor-element.elementor-element-cc0172c .elementor-icon-box-description {
            font-size: 18px;
        }

        .elementor-246 .elementor-element.elementor-element-2b2efa0 .elementor-icon-box-title,
        .elementor-246 .elementor-element.elementor-element-2b2efa0 .elementor-icon-box-title a {
            font-size: 18px;
        }

        .elementor-246 .elementor-element.elementor-element-2b2efa0 .elementor-icon-box-description {
            font-size: 18px;
        }

        .elementor-246 .elementor-element.elementor-element-6096237 {
            --padding-top: 60px;
            --padding-bottom: 60px;
            --padding-left: 20px;
            --padding-right: 20px;
        }

        .elementor-246 .elementor-element.elementor-element-933e6e0 {
            --container-widget-width: 500px;
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, 500px);
            max-width: 500px;
        }

        .elementor-246 .elementor-element.elementor-element-933e6e0 .elementor-heading-title {
            font-size: 35px;
        }

        .elementor-246 .elementor-element.elementor-element-85cd737 .elementor-counter-number-wrapper {
            font-size: 50px;
        }

        .elementor-246 .elementor-element.elementor-element-c52cff6 .elementor-counter-number-wrapper {
            font-size: 50px;
        }

        .elementor-246 .elementor-element.elementor-element-9328989 .elementor-counter-number-wrapper {
            font-size: 50px;
        }

        .elementor-246 .elementor-element.elementor-element-fe90358 .elementor-counter-number-wrapper {
            font-size: 50px;
        }

        .elementor-246 .elementor-element.elementor-element-f933fc9 {
            --padding-top: 60px;
            --padding-bottom: 60px;
            --padding-left: 20px;
            --padding-right: 20px;
        }

        .elementor-246 .elementor-element.elementor-element-c11b72e {
            --flex-wrap: wrap;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px;
        }

        .elementor-246 .elementor-element.elementor-element-1349ee5.e-con {
            --e-con-transform-translateX: -53%;
        }

        .elementor-246 .elementor-element.elementor-element-eae23a7 .elementor-heading-title {
            font-size: 42px;
        }

        .elementor-246 .elementor-element.elementor-element-d36cae5 {
            --container-widget-width: 716px;
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, 716px);
            max-width: 716px;
        }

        .elementor-246 .elementor-element.elementor-element-e17e21b .elementor-heading-title {
            font-size: 30px;
        }

        .elementor-246 .elementor-element.elementor-element-6d439b8 {
            --margin-top: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 60px;
            --padding-bottom: 40px;
            --padding-left: 20px;
            --padding-right: 20px;
        }

        .elementor-246 .elementor-element.elementor-element-6e5e8c9 {
            text-align: center;
        }

        .elementor-246 .elementor-element.elementor-element-6e5e8c9 .elementor-heading-title {
            font-size: 40px;
        }

        .elementor-246 .elementor-element.elementor-element-28ac2d5 {
            --margin-top: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 0px;
            --padding-bottom: 60px;
            --padding-left: 20px;
            --padding-right: 20px;
        }

        .elementor-246 .elementor-element.elementor-element-805e60c {
            --container-widget-width: 610px;
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, 610px);
            max-width: 610px;
            text-align: center;
        }

        .elementor-246 .elementor-element.elementor-element-805e60c .elementor-heading-title {
            font-size: 38px;
        }

        .elementor-246 .elementor-element.elementor-element-375131b {
            --container-widget-width: calc(50% - 16px / 2);
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, calc(50% - 16px / 2));
            max-width: calc(50% - 16px / 2);
        }

        .elementor-246 .elementor-element.elementor-element-8dad0ba {
            --container-widget-width: calc(50% - 16px / 2);
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, calc(50% - 16px / 2));
            max-width: calc(50% - 16px / 2);
        }

        .elementor-246 .elementor-element.elementor-element-0e33276 {
            --container-widget-width: calc(50% - 16px / 2);
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, calc(50% - 16px / 2));
            max-width: calc(50% - 16px / 2);
        }

        .elementor-246 .elementor-element.elementor-element-66c9b1c {
            --container-widget-width: calc(50% - 16px / 2);
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, calc(50% - 16px / 2));
            max-width: calc(50% - 16px / 2);
        }

        .elementor-246 .elementor-element.elementor-element-9b7739e {
            --container-widget-width: calc(50% - 16px / 2);
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, calc(50% - 16px / 2));
            max-width: calc(50% - 16px / 2);
        }

        .elementor-246 .elementor-element.elementor-element-7aff230 {
            --container-widget-width: calc(50% - 16px / 2);
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, calc(50% - 16px / 2));
            max-width: calc(50% - 16px / 2);
        }

        .elementor-246 .elementor-element.elementor-element-2362eb6 {
            --container-widget-width: 500px;
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, 500px);
            max-width: 500px;
        }

        .elementor-246 .elementor-element.elementor-element-2362eb6 .elementor-heading-title {
            font-size: 38px;
        }
    }

    @media(max-width:767px) {
        .elementor-246 .elementor-element.elementor-element-945c4c2 {
            --margin-top: -80px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 120px;
            --padding-bottom: 40px;
            --padding-left: 20px;
            --padding-right: 20px;
        }

        .elementor-246 .elementor-element.elementor-element-f9a2b16 {
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px;
        }

        .elementor-246 .elementor-element.elementor-element-f9a2b16.e-con {
            --order: 0;
        }

        .elementor-246 .elementor-element.elementor-element-166200f.e-con {
            --e-con-transform-translateX: -30%;
            --e-con-transform-translateY: -90%;
        }

        .elementor-246 .elementor-element.elementor-element-166200f {
            --width: 100%;
        }

        .elementor-246 .elementor-element.elementor-element-e721ce1.e-con {
            --e-con-transform-translateX: -30%;
            --e-con-transform-translateY: -90%;
        }

        .elementor-246 .elementor-element.elementor-element-e721ce1 {
            --width: 100%;
            top: 147%;
        }

        .elementor-246 .elementor-element.elementor-element-7a0a531.e-con {
            --e-con-transform-translateX: -55%;
            --e-con-transform-translateY: -52%;
        }

        .elementor-246 .elementor-element.elementor-element-7a0a531 {
            --width: 90%;
        }

        .elementor-246 .elementor-element.elementor-element-eb672df {
            width: var(--container-widget-width, 344px);
            max-width: 344px;
            --container-widget-width: 344px;
            --container-widget-flex-grow: 0;
        }

        .elementor-246 .elementor-element.elementor-element-eb672df>.elementor-widget-container {
            margin: 0px 0px 20px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-246 .elementor-element.elementor-element-eb672df .elementor-heading-title {
            font-size: 31px;
            line-height: 1.1em;
        }

        .elementor-246 .elementor-element.elementor-element-3611ed6>.elementor-widget-container {
            margin: 0px 0px 20px 0px;
        }

        .elementor-246 .elementor-element.elementor-element-3611ed6 {
            --container-widget-width: 458px;
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, 458px);
            max-width: 458px;
        }

        .elementor-246 .elementor-element.elementor-element-3611ed6 .elementor-heading-title {
            font-size: 18px;
        }

        .elementor-246 .elementor-element.elementor-element-356297b {
            --margin-top: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 0px;
            --padding-bottom: 40px;
            --padding-left: 20px;
            --padding-right: 20px;
        }

        .elementor-246 .elementor-element.elementor-element-0e47241 {
            width: var(--container-widget-width, 344px);
            max-width: 344px;
            --container-widget-width: 344px;
            --container-widget-flex-grow: 0;
        }

        .elementor-246 .elementor-element.elementor-element-0e47241>.elementor-widget-container {
            margin: 0px 0px 15px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-246 .elementor-element.elementor-element-0e47241 .elementor-heading-title {
            font-size: 29px;
            line-height: 1em;
        }

        .elementor-246 .elementor-element.elementor-element-4da8cee {
            --gap: 30px 30px;
            --row-gap: 30px;
            --column-gap: 30px;
        }

        .elementor-246 .elementor-element.elementor-element-e37f934 .elementor-icon-box-wrapper {
            text-align: start;
        }

        .elementor-246 .elementor-element.elementor-element-e37f934 .elementor-icon {
            font-size: 56px;
        }

        .elementor-246 .elementor-element.elementor-element-cc0172c .elementor-icon-box-wrapper {
            text-align: start;
        }

        .elementor-246 .elementor-element.elementor-element-cc0172c .elementor-icon {
            font-size: 56px;
        }

        .elementor-246 .elementor-element.elementor-element-2b2efa0 .elementor-icon-box-wrapper {
            text-align: start;
        }

        .elementor-246 .elementor-element.elementor-element-2b2efa0 .elementor-icon {
            font-size: 56px;
        }

        .elementor-246 .elementor-element.elementor-element-6096237 {
            --gap: 25px 25px;
            --row-gap: 25px;
            --column-gap: 25px;
            --padding-top: 40px;
            --padding-bottom: 40px;
            --padding-left: 20px;
            --padding-right: 20px;
        }

        .elementor-246 .elementor-element.elementor-element-933e6e0 {
            width: 100%;
            max-width: 100%;
        }

        .elementor-246 .elementor-element.elementor-element-933e6e0>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 0px 20px 0px 20px;
        }

        .elementor-246 .elementor-element.elementor-element-933e6e0 .elementor-heading-title {
            font-size: 24px;
            line-height: 1.1em;
        }

        .elementor-246 .elementor-element.elementor-element-b6a6e88 {
            --gap: 25px 0px;
            --row-gap: 25px;
            --column-gap: 0px;
            --flex-wrap: wrap;
        }

        .elementor-246 .elementor-element.elementor-element-8d6a4f5 {
            --width: 50%;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 10px;
            --padding-right: 10px;
        }

        .elementor-246 .elementor-element.elementor-element-85cd737>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-246 .elementor-element.elementor-element-85cd737 .elementor-counter {
            gap: 1px;
        }

        .elementor-246 .elementor-element.elementor-element-85cd737 .elementor-counter-number-wrapper {
            font-size: 43px;
        }

        .elementor-246 .elementor-element.elementor-element-85cd737 .elementor-counter-title {
            font-size: 18px;
        }

        .elementor-246 .elementor-element.elementor-element-de51d3a {
            --width: 50%;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 10px;
            --padding-right: 10px;
        }

        .elementor-246 .elementor-element.elementor-element-c52cff6>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-246 .elementor-element.elementor-element-c52cff6 .elementor-counter {
            gap: 1px;
        }

        .elementor-246 .elementor-element.elementor-element-c52cff6 .elementor-counter-number-wrapper {
            font-size: 43px;
        }

        .elementor-246 .elementor-element.elementor-element-c52cff6 .elementor-counter-title {
            font-size: 18px;
        }

        .elementor-246 .elementor-element.elementor-element-1da5af8 {
            --width: 50%;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 10px;
            --padding-right: 10px;
        }

        .elementor-246 .elementor-element.elementor-element-9328989>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-246 .elementor-element.elementor-element-9328989 .elementor-counter {
            gap: 1px;
        }

        .elementor-246 .elementor-element.elementor-element-9328989 .elementor-counter-number-wrapper {
            font-size: 43px;
        }

        .elementor-246 .elementor-element.elementor-element-9328989 .elementor-counter-title {
            font-size: 18px;
        }

        .elementor-246 .elementor-element.elementor-element-ab04ea4 {
            --width: 50%;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 10px;
            --padding-right: 10px;
        }

        .elementor-246 .elementor-element.elementor-element-fe90358>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-246 .elementor-element.elementor-element-fe90358 .elementor-counter {
            gap: 1px;
        }

        .elementor-246 .elementor-element.elementor-element-fe90358 .elementor-counter-number-wrapper {
            font-size: 43px;
        }

        .elementor-246 .elementor-element.elementor-element-fe90358 .elementor-counter-title {
            font-size: 18px;
        }

        .elementor-246 .elementor-element.elementor-element-f933fc9 {
            --margin-top: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 40px;
            --padding-bottom: 40px;
            --padding-left: 0px;
            --padding-right: 0px;
        }

        .elementor-246 .elementor-element.elementor-element-c11b72e {
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 20px;
            --padding-right: 20px;
        }

        .elementor-246 .elementor-element.elementor-element-c11b72e.e-con {
            --order: 0;
        }

        .elementor-246 .elementor-element.elementor-element-1349ee5.e-con {
            --e-con-transform-translateX: -45%;
            --e-con-transform-translateY: 77%;
        }

        .elementor-246 .elementor-element.elementor-element-1349ee5 {
            --width: 100%;
        }

        .elementor-246 .elementor-element.elementor-element-eae23a7 {
            width: var(--container-widget-width, 255px);
            max-width: 255px;
            --container-widget-width: 255px;
            --container-widget-flex-grow: 0;
        }

        .elementor-246 .elementor-element.elementor-element-eae23a7>.elementor-widget-container {
            margin: 0px 0px 5px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-246 .elementor-element.elementor-element-eae23a7 .elementor-heading-title {
            font-size: 29px;
            line-height: 1.2em;
        }

        .elementor-246 .elementor-element.elementor-element-d36cae5 {
            font-size: 18px;
        }

        .elementor-246 .elementor-element.elementor-element-e17e21b {
            width: var(--container-widget-width, 344px);
            max-width: 344px;
            --container-widget-width: 344px;
            --container-widget-flex-grow: 0;
        }

        .elementor-246 .elementor-element.elementor-element-e17e21b>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-246 .elementor-element.elementor-element-e17e21b .elementor-heading-title {
            font-size: 23px;
            line-height: 1em;
        }

        .elementor-246 .elementor-element.elementor-element-6d439b8 {
            --margin-top: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 40px;
            --padding-bottom: 40px;
            --padding-left: 20px;
            --padding-right: 20px;
        }

        .elementor-246 .elementor-element.elementor-element-6e5e8c9>.elementor-widget-container {
            margin: 0px 0px 20px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-246 .elementor-element.elementor-element-6e5e8c9 .elementor-heading-title {
            font-size: 28px;
            line-height: 1.1em;
        }

        .elementor-246 .elementor-element.elementor-element-28ac2d5 {
            --margin-top: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 0px;
            --padding-bottom: 40px;
            --padding-left: 20px;
            --padding-right: 20px;
        }

        .elementor-246 .elementor-element.elementor-element-805e60c>.elementor-widget-container {
            margin: 0px 0px 20px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-246 .elementor-element.elementor-element-805e60c {
            --container-widget-width: 432px;
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, 432px);
            max-width: 432px;
        }

        .elementor-246 .elementor-element.elementor-element-805e60c .elementor-heading-title {
            font-size: 28px;
            line-height: 1.15em;
        }

        .elementor-246 .elementor-element.elementor-element-375131b {
            --container-widget-width: 100%;
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, 100%);
            max-width: 100%;
        }

        .elementor-246 .elementor-element.elementor-element-8dad0ba {
            --container-widget-width: 100%;
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, 100%);
            max-width: 100%;
        }

        .elementor-246 .elementor-element.elementor-element-0e33276 {
            --container-widget-width: 100%;
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, 100%);
            max-width: 100%;
        }

        .elementor-246 .elementor-element.elementor-element-66c9b1c {
            --container-widget-width: 100%;
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, 100%);
            max-width: 100%;
        }

        .elementor-246 .elementor-element.elementor-element-9b7739e {
            --container-widget-width: 100%;
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, 100%);
            max-width: 100%;
        }

        .elementor-246 .elementor-element.elementor-element-7aff230 {
            --container-widget-width: 100%;
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, 100%);
            max-width: 100%;
        }

        .elementor-246 .elementor-element.elementor-element-6570d12 {
            --padding-top: 40px;
            --padding-bottom: 40px;
            --padding-left: 20px;
            --padding-right: 20px;
        }

        .elementor-246 .elementor-element.elementor-element-2362eb6 {
            width: var(--container-widget-width, 384px);
            max-width: 384px;
            --container-widget-width: 384px;
            --container-widget-flex-grow: 0;
        }

        .elementor-246 .elementor-element.elementor-element-2362eb6>.elementor-widget-container {
            margin: 0px 0px 20px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-246 .elementor-element.elementor-element-2362eb6 .elementor-heading-title {
            font-size: 28px;
            line-height: 1.15em;
        }

        .elementor-246 .elementor-element.elementor-element-ad6416f>.elementor-widget-container {
            margin: 0px 0px 30px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-246 .elementor-element.elementor-element-ad6416f {
            text-align: center;
        }

        .elementor-246 .elementor-element.elementor-element-ad6416f .elementor-heading-title {
            font-size: 18px;
        }

        .elementor-246 .elementor-element.elementor-element-c90bb28 .elementor-button {
            font-size: 19px;
            padding: 14px 50px 14px 50px;
        }
    }

    @media(min-width:768px) {
        .elementor-246 .elementor-element.elementor-element-f9a2b16 {
            --width: 1400px;
        }

        .elementor-246 .elementor-element.elementor-element-166200f {
            --width: 360px;
        }

        .elementor-246 .elementor-element.elementor-element-e721ce1 {
            --width: 360px;
        }

        .elementor-246 .elementor-element.elementor-element-7a0a531 {
            --width: 290px;
        }

        .elementor-246 .elementor-element.elementor-element-356297b {
            --content-width: 1500px;
        }

        .elementor-246 .elementor-element.elementor-element-6096237 {
            --content-width: 1090px;
        }

        .elementor-246 .elementor-element.elementor-element-8d6a4f5 {
            --width: 25%;
        }

        .elementor-246 .elementor-element.elementor-element-de51d3a {
            --width: 25%;
        }

        .elementor-246 .elementor-element.elementor-element-1da5af8 {
            --width: 25%;
        }

        .elementor-246 .elementor-element.elementor-element-ab04ea4 {
            --width: 25%;
        }

        .elementor-246 .elementor-element.elementor-element-c11b72e {
            --width: 1400px;
        }

        .elementor-246 .elementor-element.elementor-element-1349ee5 {
            --width: 400px;
        }

        .elementor-246 .elementor-element.elementor-element-6d439b8 {
            --content-width: 1300px;
        }

        .elementor-246 .elementor-element.elementor-element-28ac2d5 {
            --content-width: 1300px;
        }
    }

    @media(max-width:1024px) and (min-width:768px) {
        .elementor-246 .elementor-element.elementor-element-f9a2b16 {
            --width: 718px;
        }

        .elementor-246 .elementor-element.elementor-element-c11b72e {
            --width: 718px;
        }
    }

    /* Start custom CSS for container, class: .elementor-element-166200f */

    .elementor-246 .elementor-element.elementor-element-166200f {
        aspect-ratio: 1 / 1;
        filter: blur(190px);
    }

    /* End custom CSS */

    /* Start custom CSS for container, class: .elementor-element-e721ce1 */

    .elementor-246 .elementor-element.elementor-element-e721ce1 {
        aspect-ratio: 1 / 1;
        filter: blur(190px);
    }

    /* End custom CSS */

    /* Start custom CSS for container, class: .elementor-element-7a0a531 */

    .elementor-246 .elementor-element.elementor-element-7a0a531 {
        aspect-ratio: 1 / 1;
        filter: blur(180px);
    }

    /* End custom CSS */

    /* Start custom CSS for heading, class: .elementor-element-eb672df */

    .elementor-246 .elementor-element.elementor-element-eb672df .elementor-heading-title::after {
        display: inline-block;
        width: .8em;
        height: .6em;
        margin-left: .3em;
        content: '';
        background: url('data:image/svg+xml,<svg width="41" height="37" viewBox="0 0 41 37" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.1635 37L17.2398 34.3788C13.8456 31.3206 11.0395 28.6826 8.82153 26.4646C6.60354 24.2466 4.83924 22.2555 3.52861 20.4911C2.21798 18.7268 1.30223 17.1054 0.781335 15.6267C0.260445 14.148 0 12.6358 0 11.0899C0 7.93097 1.05858 5.29292 3.17575 3.17575C5.29292 1.05858 7.93097 0 11.0899 0C12.8374 0 14.5009 0.369664 16.0804 1.10899C17.6599 1.84832 19.0209 2.8901 20.1635 4.23433C21.3061 2.8901 22.6671 1.84832 24.2466 1.10899C25.8261 0.369664 27.4896 0 29.2371 0C32.396 0 35.0341 1.05858 37.1512 3.17575C39.2684 5.29292 40.327 7.93097 40.327 11.0899C40.327 12.6358 40.0665 14.148 39.5456 15.6267C39.0248 17.1054 38.109 18.7268 36.7984 20.4911C35.4877 22.2555 33.7234 24.2466 31.5055 26.4646C29.2875 28.6826 26.4814 31.3206 23.0872 34.3788L20.1635 37Z" fill="%2316CEA3"/></svg>') 0% 50% no-repeat;
        background-size: contain;
    }

    /* End custom CSS */

    /* Start custom CSS for heading, class: .elementor-element-3611ed6 */

    .elementor-246 .elementor-element.elementor-element-3611ed6 .line {
        display: block;
    }

    /* End custom CSS */

    /* Start custom CSS for image-carousel, class: .elementor-element-b0be6ed */

    /*.elementor-246 .elementor-element.elementor-element-b0be6ed .elementor-image-carousel-wrapper {*/

    /*    border-radius: 14px !important;*/

    /*}*/

    .elementor-246 .elementor-element.elementor-element-b0be6ed .swiper-slide-image {
        aspect-ratio: 2 / .93;
        object-fit: cover;
        display: block;
        border-radius: 14px !important;
    }

    @media (max-width:1024px) {
        .elementor-246 .elementor-element.elementor-element-b0be6ed .elementor-swiper-button {
            display: none;
        }
    }

    /* End custom CSS */

    /* Start custom CSS for heading, class: .elementor-element-933e6e0 */

    .elementor-246 .elementor-element.elementor-element-933e6e0 .accented {
        color: #16CEA3;
    }

    /* End custom CSS */

    /* Start custom CSS for counter, class: .elementor-element-85cd737 */

    .elementor-246 .elementor-element.elementor-element-85cd737 {
        text-align: center;
    }

    /* End custom CSS */

    /* Start custom CSS for counter, class: .elementor-element-c52cff6 */

    .elementor-246 .elementor-element.elementor-element-c52cff6 {
        text-align: center;
    }

    /* End custom CSS */

    /* Start custom CSS for counter, class: .elementor-element-9328989 */

    .elementor-246 .elementor-element.elementor-element-9328989 {
        text-align: center;
    }

    /* End custom CSS */

    /* Start custom CSS for counter, class: .elementor-element-fe90358 */

    .elementor-246 .elementor-element.elementor-element-fe90358 {
        text-align: center;
    }

    /* End custom CSS */

    /* Start custom CSS for container, class: .elementor-element-6096237 */

    .elementor-246 .elementor-element.elementor-element-6096237 .e-con+.e-con::before {
        content: '';
        display: block;
        height: 100%;
        width: 1px;
        background: linear-gradient(180deg, rgba(22, 206, 163, 0.00) 0%, rgba(22, 206, 163, 0.60) 50%, rgba(22, 206, 163, 0.00) 100%);
    }

    @media (max-width:768px) {
        .elementor-246 .elementor-element.elementor-element-6096237 .e-con+.e-con::before {
            content: none;
        }
    }

    /* End custom CSS */

    /* Start custom CSS for container, class: .elementor-element-1349ee5 */

    .elementor-246 .elementor-element.elementor-element-1349ee5 {
        aspect-ratio: 1 / .7;
        filter: blur(210px);
    }

    /* End custom CSS */

    /* Start custom CSS for shortcode, class: .elementor-element-4f201a9 */

    .team {
        display: flex;
        flex-wrap: wrap;
        gap: 1.6%;
    }

    .team .item {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 50% 50%;
        width: calc(20% - 1.28%);
        margin-bottom: 3.5%;
    }

    .team .image-link {
        display: block;
        transition: .4s ease-in-out all;
        transform: translateZ(0);
        will-change: transform;
    }

    .team .image-link:hover {
        will-change: transform;
        transform: translateY(-5px) translateZ(0);
    }

    .team .image-link img {
        aspect-ratio: 1 / 1;
        object-fit: cover;
        object-position: 50% 15%;
        display: block;
        border-radius: 12px;
    }

    .team .name-and-icons {
        display: flex;
        margin-top: 16px;
        justify-content: space-between;
    }

    .team .name {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 2px;
        transition: .2s ease-out all;
        position: relative;
        color: #000;
        line-height: 1.1;
    }

    .team a.name:hover {
        color: #13B992;
    }

    .team .col:last-child {
        display: flex;
        padding-top: 2px;
        padding-left: 10px;
        gap: 8px;
    }

    .team .icon {
        width: 22px;
        height: 22px;
        display: block;
        background-position: 50% 50%;
        background-size: contain;
    }

    .team .icon-info {
        background-image: url('data:image/svg+xml,<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 6.75C9 6.338 9.338 6 9.75 6H10.25C10.662 6 11 6.338 11 6.75V7.25C11 7.662 10.662 8 10.25 8H9.75C9.55133 7.99921 9.36102 7.91994 9.22054 7.77946C9.08006 7.63898 9.00079 7.44867 9 7.25V6.75ZM12 14H8V13H9V10H8V9H11V13H12V14Z" fill="black"/><path d="M10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18C12.1217 18 14.1566 17.1571 15.6569 15.6569C17.1571 14.1566 18 12.1217 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2ZM10 16.5C8.27609 16.5 6.62279 15.8152 5.40381 14.5962C4.18482 13.3772 3.5 11.7239 3.5 10C3.5 8.27609 4.18482 6.62279 5.40381 5.40381C6.62279 4.18482 8.27609 3.5 10 3.5C11.7239 3.5 13.3772 4.18482 14.5962 5.40381C15.8152 6.62279 16.5 8.27609 16.5 10C16.5 11.7239 15.8152 13.3772 14.5962 14.5962C13.3772 15.8152 11.7239 16.5 10 16.5Z" fill="black"/></svg>');
    }

    .team .icon-linkedin {
        background-image: url('data:image/svg+xml,<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.66634 9.16634V13.333M6.66634 6.66634V6.67467M9.99967 13.333V9.16634M13.333 13.333V10.833C13.333 10.391 13.1574 9.96706 12.8449 9.6545C12.5323 9.34194 12.1084 9.16634 11.6663 9.16634C11.2243 9.16634 10.8004 9.34194 10.4878 9.6545C10.1753 9.96706 9.99967 10.391 9.99967 10.833M3.33301 4.99967C3.33301 4.55765 3.5086 4.13372 3.82116 3.82116C4.13372 3.5086 4.55765 3.33301 4.99967 3.33301H14.9997C15.4417 3.33301 15.8656 3.5086 16.1782 3.82116C16.4907 4.13372 16.6663 4.55765 16.6663 4.99967V14.9997C16.6663 15.4417 16.4907 15.8656 16.1782 16.1782C15.8656 16.4907 15.4417 16.6663 14.9997 16.6663H4.99967C4.55765 16.6663 4.13372 16.4907 3.82116 16.1782C3.5086 15.8656 3.33301 15.4417 3.33301 14.9997V4.99967Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>');
    }

    .team .icon-email {
        background-image: url('data:image/svg+xml,<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.25 6.25C3.25 5.85218 3.40804 5.47064 3.68934 5.18934C3.97064 4.90804 4.35218 4.75 4.75 4.75H15.25C15.6478 4.75 16.0294 4.90804 16.3107 5.18934C16.592 5.47064 16.75 5.85218 16.75 6.25M3.25 6.25V13.75C3.25 14.1478 3.40804 14.5294 3.68934 14.8107C3.97064 15.092 4.35218 15.25 4.75 15.25H15.25C15.6478 15.25 16.0294 15.092 16.3107 14.8107C16.592 14.5294 16.75 14.1478 16.75 13.75V6.25M3.25 6.25L10 10.75L16.75 6.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>');
    }

    @media (max-width:1024px) {
        .team {
            gap: 2.5%;
        }

        .team .item {
            width: calc(33.3% - 1.65%);
            margin-bottom: 30px;
        }
    }

    @media (max-width:560px) {
        .team {
            gap: 5%;
        }

        .team .col:last-child {
            padding-top: 0;
            margin-top: -3px;
        }

        .team .name {
            font-size: 16px;
        }

        .team .position {
            font-size: 14px;
        }

        .team .item {
            width: calc(50% - 2.5%);
            margin-bottom: 20px;
        }
    }

    /* End custom CSS */

    /* Start custom CSS for flip-box, class: .elementor-element-375131b */

    .elementor-246 .elementor-element.elementor-element-375131b .elementor-flip-box__layer__title {
        max-width: 234px;
        margin: 0 auto;
    }

    /* End custom CSS */

    /* Start custom CSS for flip-box, class: .elementor-element-8dad0ba */

    .elementor-246 .elementor-element.elementor-element-8dad0ba .elementor-flip-box__layer__title {
        max-width: 234px;
        margin: 0 auto;
    }

    /* End custom CSS */

    /* Start custom CSS for flip-box, class: .elementor-element-0e33276 */

    .elementor-246 .elementor-element.elementor-element-0e33276 .elementor-flip-box__layer__title {
        max-width: 234px;
        margin: 0 auto;
    }

    /* End custom CSS */

    /* Start custom CSS for flip-box, class: .elementor-element-66c9b1c */

    .elementor-246 .elementor-element.elementor-element-66c9b1c .elementor-flip-box__layer__title {
        max-width: 234px;
        margin: 0 auto;
    }

    /* End custom CSS */

    /* Start custom CSS for flip-box, class: .elementor-element-9b7739e */

    .elementor-246 .elementor-element.elementor-element-9b7739e .elementor-flip-box__layer__title {
        max-width: 234px;
        margin: 0 auto;
    }

    /* End custom CSS */

    /* Start custom CSS for flip-box, class: .elementor-element-7aff230 */

    .elementor-246 .elementor-element.elementor-element-7aff230 .elementor-flip-box__layer__title {
        max-width: 234px;
        margin: 0 auto;
    }

    /* End custom CSS */

    /* Start custom CSS for heading, class: .elementor-element-2362eb6 */

    .elementor-246 .elementor-element.elementor-element-2362eb6 .accented {
        color: #16CEA3;
    }

    /* End custom CSS */

    /* Start custom CSS for button, class: .elementor-element-c90bb28 */

    .elementor-246 .elementor-element.elementor-element-c90bb28 .elementor-button-wrapper::after {
        z-index: -1;
        position: absolute;
        bottom: -20%;
        left: 50%;
        transform: translateX(-50%);
        height: 80%;
        width: 85%;
        background: rgba(0, 0, 0, .1);
        filter: blur(12px);
        content: '';
        border-radius: 50%;
        transition: .3s ease-in-out all;
    }

    .elementor-246 .elementor-element.elementor-element-c90bb28 .elementor-button {
        position: relative;
        overflow: hidden;
        display: inline-flex;
        transition: .3s ease-in-out all;
        /*display: block;*/
    }

    .elementor-246 .elementor-element.elementor-element-c90bb28 .elementor-button:active {
        background: #11CCA1;
    }

    .elementor-246 .elementor-element.elementor-element-c90bb28 .elementor-button::before {
        z-index: 0;
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        height: 90%;
        width: 85%;
        background: rgba(55, 248, 203, 0.70);
        filter: blur(12px);
        content: '';
        border-radius: 50%;
        transition: .3s ease-in-out all;
        opacity: 0;
    }

    .elementor-246 .elementor-element.elementor-element-c90bb28 .elementor-button:hover::before {
        opacity: 1;
        top: 50%;
    }

    .elementor-246 .elementor-element.elementor-element-c90bb28 .elementor-button-icon {
        transition: .3s ease-in-out all;
    }

    .elementor-246 .elementor-element.elementor-element-c90bb28 .elementor-button:hover .elementor-button-icon {
        transform: translateX(3px);
    }

    .elementor-246 .elementor-element.elementor-element-c90bb28 .elementor-button-icon svg {
        height: .75em;
        width: auto;
    }

    .elementor-246 .elementor-element.elementor-element-c90bb28 .elementor-button-content-wrapper {
        position: relative;
        z-index: 1;
        margin-bottom: 1px;
    }

    /* End custom CSS */

    /* Start Custom Fonts CSS */

    @font-face {
        font-family: 'Sentient';
        font-style: normal;
        font-weight: normal;
        font-display: auto;
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Regular.eot');
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Regular.eot?#iefix') format('embedded-opentype'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Regular.woff2') format('woff2'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Regular.woff') format('woff'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Regular.ttf') format('truetype');
    }

    @font-face {
        font-family: 'Sentient';
        font-style: normal;
        font-weight: 500;
        font-display: auto;
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Medium.eot');
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Medium.eot?#iefix') format('embedded-opentype'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Medium.woff2') format('woff2'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Medium.woff') format('woff'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Medium.ttf') format('truetype');
    }

    @font-face {
        font-family: 'Sentient';
        font-style: italic;
        font-weight: normal;
        font-display: auto;
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Italic.eot');
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Italic.eot?#iefix') format('embedded-opentype'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Italic.woff2') format('woff2'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Italic.woff') format('woff'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Italic.ttf') format('truetype');
    }

    @font-face {
        font-family: 'Sentient';
        font-style: normal;
        font-weight: bold;
        font-display: auto;
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Bold.eot');
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Bold.eot?#iefix') format('embedded-opentype'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Bold.woff2') format('woff2'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Bold.woff') format('woff'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-Bold.ttf') format('truetype');
    }

    @font-face {
        font-family: 'Sentient';
        font-style: italic;
        font-weight: bold;
        font-display: auto;
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-BoldItalic.eot');
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-BoldItalic.eot?#iefix') format('embedded-opentype'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-BoldItalic.woff2') format('woff2'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-BoldItalic.woff') format('woff'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-BoldItalic.ttf') format('truetype');
    }

    @font-face {
        font-family: 'Sentient';
        font-style: italic;
        font-weight: 500;
        font-display: auto;
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-MediumItalic.eot');
        src: url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-MediumItalic.eot?#iefix') format('embedded-opentype'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-MediumItalic.woff2') format('woff2'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-MediumItalic.woff') format('woff'), url('https://cdn.spines.com/wp-content/uploads/2025/04/Sentient-MediumItalic.ttf') format('truetype');
    }

    /* End Custom Fonts CSS */

    .elementor-274063 .elementor-element.elementor-element-b55241d {
        --display: flex;
        --position: fixed;
        --flex-direction: column;
        --container-widget-width: 100%;
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
        --margin-top: 0px;
        --margin-bottom: 0px;
        --margin-left: 0px;
        --margin-right: 0px;
        --padding-top: 25px;
        --padding-bottom: 0px;
        --padding-left: 20px;
        --padding-right: 20px;
        top: var(--wp-admin--admin-bar--height, 0);
        --z-index: 100;
    }

    .elementor-274063 .elementor-element.elementor-element-45f77a65 {
        --display: flex;
        --min-height: 75px;
        --flex-direction: row;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: 100%;
        --container-widget-flex-grow: 1;
        --container-widget-align-self: stretch;
        --flex-wrap-mobile: wrap;
        --justify-content: space-between;
        --align-items: center;
        --flex-wrap: wrap;
        --border-radius: 16px 16px 16px 16px;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-274063 .elementor-element.elementor-element-45f77a65:not(.elementor-motion-effects-element-type-background),
    .elementor-274063 .elementor-element.elementor-element-45f77a65>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #FFFFFF;
    }

    .elementor-274063 .elementor-element.elementor-element-4644c9e6 {
        --display: flex;
        --flex-direction: row;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: 100%;
        --container-widget-flex-grow: 1;
        --container-widget-align-self: stretch;
        --flex-wrap-mobile: wrap;
        --justify-content: space-between;
        --align-items: center;
        --padding-top: 16px;
        --padding-bottom: 16px;
        --padding-left: 16px;
        --padding-right: 16px;
        --z-index: 1;
    }

    body:not(.rtl) .elementor-274063 .elementor-element.elementor-element-3e93e952 {
        left: 16px;
    }

    body.rtl .elementor-274063 .elementor-element.elementor-element-3e93e952 {
        right: 16px;
    }

    .elementor-274063 .elementor-element.elementor-element-3e93e952 {
        top: 18px;
        z-index: 0;
    }

    .elementor-274063 .elementor-element.elementor-element-c147930>.elementor-widget-container {
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 5px;
    }

    .elementor-274063 .elementor-element.elementor-element-c147930 img {
        width: 100%;
        max-width: 128px;
    }

    .elementor-274063 .elementor-element.elementor-element-68cb957>.elementor-widget-container {
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu .elementor-item {
        font-family: "DM Sans", Sans-serif;
        font-size: 17px;
        font-weight: 500;
    }

    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--main .elementor-item {
        color: #133B49;
        fill: #133B49;
        padding-left: 21px;
        padding-right: 21px;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--main .elementor-item.elementor-item-active {
        color: #17B48F;
    }

    .elementor-274063 .elementor-element.elementor-element-68cb957 {
        --e-nav-menu-horizontal-menu-item-margin: calc(0px / 2);
    }

    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu>li:not(:last-child) {
        margin-bottom: 0px;
    }

    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown a,
    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-menu-toggle {
        color: #000000;
        fill: #000000;
    }

    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown {
        background-color: #FFFFFF;
    }

    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown a:hover,
    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown a:focus,
    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown a.elementor-item-active,
    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown a.highlighted,
    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-menu-toggle:hover,
    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-menu-toggle:focus {
        color: #54b48c;
    }

    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown a:hover,
    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown a:focus,
    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown a.elementor-item-active,
    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown a.highlighted {
        background-color: #FFFFFF;
    }

    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown .elementor-item,
    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown .elementor-sub-item {
        font-family: "Roboto", Sans-serif;
        font-size: 15px;
        font-weight: 500;
    }

    .elementor-274063 .elementor-element.elementor-element-35b1f0f>.elementor-widget-container {
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu .elementor-item {
        font-family: "DM Sans", Sans-serif;
        font-size: 17px;
        font-weight: 500;
    }

    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--main .elementor-item {
        color: #133B49;
        fill: #133B49;
        padding-left: 21px;
        padding-right: 21px;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--main .elementor-item.elementor-item-active {
        color: #50B48C;
    }

    .elementor-274063 .elementor-element.elementor-element-35b1f0f {
        --e-nav-menu-horizontal-menu-item-margin: calc(0px / 2);
    }

    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu>li:not(:last-child) {
        margin-bottom: 0px;
    }

    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown a,
    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-menu-toggle {
        color: #000000;
        fill: #000000;
    }

    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown {
        background-color: #FFFFFF;
    }

    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown a:hover,
    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown a:focus,
    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown a.elementor-item-active,
    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown a.highlighted,
    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-menu-toggle:hover,
    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-menu-toggle:focus {
        color: #54b48c;
    }

    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown a:hover,
    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown a:focus,
    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown a.elementor-item-active,
    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown a.highlighted {
        background-color: #FFFFFF;
    }

    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown .elementor-item,
    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown .elementor-sub-item {
        font-family: "Roboto", Sans-serif;
        font-size: 15px;
        font-weight: 500;
    }

    .elementor-274063 .elementor-element.elementor-element-63fd71dc .elementor-button {
        background-color: #1CD5AA;
        font-family: "DM Sans", Sans-serif;
        font-size: 16px;
        font-weight: 500;
        fill: #133B49;
        color: #133B49;
        border-radius: 10px 10px 10px 10px;
        padding: 10px 13px 10px 13px;
    }

    .elementor-274063 .elementor-element.elementor-element-63fd71dc>.elementor-widget-container {
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
    }

    body:not(.rtl) .elementor-274063 .elementor-element.elementor-element-63fd71dc {
        right: 0px;
    }

    body.rtl .elementor-274063 .elementor-element.elementor-element-63fd71dc {
        left: 0px;
    }

    .elementor-274063 .elementor-element.elementor-element-63fd71dc {
        top: 0px;
    }

    .elementor-274063 .elementor-element.elementor-element-478fa194 {
        --display: flex;
        --margin-top: 0px;
        --margin-bottom: 0px;
        --margin-left: 0px;
        --margin-right: 0px;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
        --z-index: 0;
    }

    .elementor-274063 .elementor-element.elementor-element-7e06a547 {
        width: 100%;
        max-width: 100%;
        --e-nav-menu-horizontal-menu-item-margin: calc(15px / 2);
    }

    .elementor-274063 .elementor-element.elementor-element-7e06a547>.elementor-widget-container {
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu .elementor-item {
        font-family: "DM Sans", Sans-serif;
        font-size: 17px;
        font-weight: 500;
    }

    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--main .elementor-item {
        color: #133B49;
        fill: #133B49;
        padding-left: 0px;
        padding-right: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--main .elementor-item:hover,
    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--main .elementor-item.elementor-item-active,
    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--main .elementor-item.highlighted,
    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--main .elementor-item:focus {
        color: #17B48F;
        fill: #17B48F;
    }

    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--main .elementor-item.elementor-item-active {
        color: #17B48F;
    }

    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu>li:not(:last-child) {
        margin-bottom: 15px;
    }

    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown a,
    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-menu-toggle {
        color: #000000;
        fill: #000000;
    }

    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown {
        background-color: #FFFFFF;
    }

    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown a:hover,
    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown a:focus,
    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown a.elementor-item-active,
    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown a.highlighted,
    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-menu-toggle:hover,
    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-menu-toggle:focus {
        color: #54b48c;
    }

    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown a:hover,
    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown a:focus,
    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown a.elementor-item-active,
    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown a.highlighted {
        background-color: #FFFFFF;
    }

    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown .elementor-item,
    .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown .elementor-sub-item {
        font-family: "Roboto", Sans-serif;
        font-size: 15px;
        font-weight: 500;
    }

    .elementor-274063 .elementor-element.elementor-element-18a63eca {
        width: 100%;
        max-width: 100%;
        --e-nav-menu-horizontal-menu-item-margin: calc(15px / 2);
    }

    .elementor-274063 .elementor-element.elementor-element-18a63eca>.elementor-widget-container {
        margin: 0px 0px 0px 0px;
        padding: 15px 0px 0px 0px;
    }

    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu .elementor-item {
        font-family: "DM Sans", Sans-serif;
        font-size: 17px;
        font-weight: 500;
    }

    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--main .elementor-item {
        color: #133B49;
        fill: #133B49;
        padding-left: 0px;
        padding-right: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--main .elementor-item:hover,
    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--main .elementor-item.elementor-item-active,
    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--main .elementor-item.highlighted,
    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--main .elementor-item:focus {
        color: #50B48C;
        fill: #50B48C;
    }

    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--main .elementor-item.elementor-item-active {
        color: #50B48C;
    }

    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu>li:not(:last-child) {
        margin-bottom: 15px;
    }

    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown a,
    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-menu-toggle {
        color: #000000;
        fill: #000000;
    }

    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown {
        background-color: #FFFFFF;
    }

    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown a:hover,
    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown a:focus,
    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown a.elementor-item-active,
    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown a.highlighted,
    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-menu-toggle:hover,
    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-menu-toggle:focus {
        color: #54b48c;
    }

    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown a:hover,
    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown a:focus,
    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown a.elementor-item-active,
    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown a.highlighted {
        background-color: #FFFFFF;
    }

    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown .elementor-item,
    .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown .elementor-sub-item {
        font-family: "Roboto", Sans-serif;
        font-size: 15px;
        font-weight: 500;
    }

    .elementor-274063 .elementor-element.elementor-element-7a71fe44 {
        --display: flex;
        --min-height: 100px;
        --flex-direction: column;
        --container-widget-width: 100%;
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
    }

    @media(max-width:1024px) {
        .elementor-274063 .elementor-element.elementor-element-b55241d {
            --padding-top: 20px;
            --padding-bottom: 0px;
            --padding-left: 20px;
            --padding-right: 20px;
        }

        .elementor-274063 .elementor-element.elementor-element-45f77a65 {
            --justify-content: space-between;
            --align-items: center;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        }

        .elementor-274063 .elementor-element.elementor-element-3e93e952 {
            z-index: 2;
        }

        .elementor-274063 .elementor-element.elementor-element-c147930>.elementor-widget-container {
            margin: 0px 0px 0px 45px;
        }

        .elementor-274063 .elementor-element.elementor-element-68cb957>.elementor-widget-container {
            padding: 0px 0px 0px 0px;
        }

        .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown .elementor-item,
        .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown .elementor-sub-item {
            font-size: 18px;
        }

        .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown a {
            padding-left: 21px;
            padding-right: 21px;
            padding-top: 16px;
            padding-bottom: 16px;
        }

        .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
        .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
            margin-top: 14px !important;
        }

        .elementor-274063 .elementor-element.elementor-element-35b1f0f>.elementor-widget-container {
            padding: 0px 0px 0px 0px;
        }

        .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu .elementor-item {
            font-size: 16px;
        }

        .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown .elementor-item,
        .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown .elementor-sub-item {
            font-size: 18px;
        }

        .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown a {
            padding-left: 21px;
            padding-right: 21px;
            padding-top: 16px;
            padding-bottom: 16px;
        }

        .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
        .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu__container.elementor-nav-menu--dropdown {
            margin-top: 14px !important;
        }

        .elementor-274063 .elementor-element.elementor-element-478fa194 {
            --flex-direction: column;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --flex-wrap-mobile: wrap;
            --justify-content: center;
            --align-items: center;
            --flex-wrap: nowrap;
            --border-radius: 0px 0px 16px 16px;
            --margin-top: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
        }

        .elementor-274063 .elementor-element.elementor-element-7e06a547>.elementor-widget-container {
            padding: 0px 0px 0px 0px;
        }

        .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown .elementor-item,
        .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown .elementor-sub-item {
            font-size: 18px;
        }

        .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown a {
            padding-left: 21px;
            padding-right: 21px;
            padding-top: 16px;
            padding-bottom: 16px;
        }

        .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
        .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
            margin-top: 14px !important;
        }

        .elementor-274063 .elementor-element.elementor-element-18a63eca>.elementor-widget-container {
            padding: 15px 0px 0px 0px;
        }

        .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown .elementor-item,
        .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown .elementor-sub-item {
            font-size: 18px;
        }

        .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown a {
            padding-left: 21px;
            padding-right: 21px;
            padding-top: 16px;
            padding-bottom: 16px;
        }

        .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
        .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu__container.elementor-nav-menu--dropdown {
            margin-top: 14px !important;
        }

        .elementor-274063 .elementor-element.elementor-element-7a71fe44 {
            --min-height: 95px;
        }
    }

    @media(max-width:767px) {
        .elementor-274063 .elementor-element.elementor-element-45f77a65 {
            --min-height: 55px;
        }

        .elementor-274063 .elementor-element.elementor-element-4644c9e6 {
            --padding-top: 15px;
            --padding-bottom: 15px;
            --padding-left: 15px;
            --padding-right: 15px;
        }

        body:not(.rtl) .elementor-274063 .elementor-element.elementor-element-3e93e952 {
            left: 7px;
        }

        body.rtl .elementor-274063 .elementor-element.elementor-element-3e93e952 {
            right: 7px;
        }

        .elementor-274063 .elementor-element.elementor-element-3e93e952 {
            top: 10px;
        }

        .elementor-274063 .elementor-element.elementor-element-c147930>.elementor-widget-container {
            margin: 0px 0px 0px 30px;
        }

        .elementor-274063 .elementor-element.elementor-element-c147930 img {
            max-width: 90px;
        }

        .elementor-274063 .elementor-element.elementor-element-68cb957>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown .elementor-item,
        .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown .elementor-sub-item {
            font-size: 20px;
        }

        .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--dropdown a {
            padding-left: 0px;
            padding-right: 0px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
        .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
            margin-top: 22px !important;
        }

        .elementor-274063 .elementor-element.elementor-element-35b1f0f>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown .elementor-item,
        .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown .elementor-sub-item {
            font-size: 20px;
        }

        .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--dropdown a {
            padding-left: 0px;
            padding-right: 0px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
        .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu__container.elementor-nav-menu--dropdown {
            margin-top: 22px !important;
        }

        body:not(.rtl) .elementor-274063 .elementor-element.elementor-element-63fd71dc {
            right: 10px;
        }

        body.rtl .elementor-274063 .elementor-element.elementor-element-63fd71dc {
            left: 10px;
        }

        .elementor-274063 .elementor-element.elementor-element-63fd71dc {
            top: 10px;
        }

        .elementor-274063 .elementor-element.elementor-element-63fd71dc .elementor-button {
            padding: 10px 13px 9px 13px;
        }

        .elementor-274063 .elementor-element.elementor-element-7e06a547>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 15px 0px 0px 0px;
        }

        .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown .elementor-item,
        .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown .elementor-sub-item {
            font-size: 20px;
        }

        .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--dropdown a {
            padding-left: 0px;
            padding-right: 0px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
        .elementor-274063 .elementor-element.elementor-element-7e06a547 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
            margin-top: 22px !important;
        }

        .elementor-274063 .elementor-element.elementor-element-18a63eca>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown .elementor-item,
        .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown .elementor-sub-item {
            font-size: 20px;
        }

        .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--dropdown a {
            padding-left: 0px;
            padding-right: 0px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
        .elementor-274063 .elementor-element.elementor-element-18a63eca .elementor-nav-menu__container.elementor-nav-menu--dropdown {
            margin-top: 22px !important;
        }

        .elementor-274063 .elementor-element.elementor-element-7a71fe44 {
            --min-height: 75px;
        }
    }

    @media(min-width:768px) {
        .elementor-274063 .elementor-element.elementor-element-b55241d {
            --content-width: 1400px;
        }

        .elementor-274063 .elementor-element.elementor-element-478fa194 {
            --width: 100%;
        }
    }

    @media(max-width:1024px) and (min-width:768px) {
        .elementor-274063 .elementor-element.elementor-element-478fa194 {
            --width: 100%;
        }
    }

    /* Start custom CSS for image, class: .elementor-element-c147930 */

    .elementor-274063 .elementor-element.elementor-element-c147930 img {
        display: block;
    }

    /* End custom CSS */

    /* Start custom CSS for nav-menu, class: .elementor-element-68cb957 */

    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu li {
        border-radius: 8px;
        transition: .3s ease-in-out all;
    }

    .elementor-274063 .elementor-element.elementor-element-68cb957 .elementor-nav-menu li:hover {
        background: rgba(0, 0, 0, .04);
    }

    /* End custom CSS */

    /* Start custom CSS for nav-menu, class: .elementor-element-35b1f0f */

    .theme-hello-elementor .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu--main li.btn-menu a.elementor-item {
        color: #312E81 !important;
    }

    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu {
        gap: 3px;
    }

    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu:after {
        display: none !important;
    }

    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu li {
        border-radius: 8px;
        transition: .3s ease-in-out all;
    }

    .elementor-274063 .elementor-element.elementor-element-35b1f0f .elementor-nav-menu li:hover {
        background: rgba(0, 0, 0, .04);
    }

    body.not-scrolled .elementor-274063 .elementor-element.elementor-element-35b1f0f .btn-menu a {
        border: 1px solid #1CD8AC !important;
        background: none !important;
    }

    /* End custom CSS */

    /* Start custom CSS for button, class: .elementor-element-63fd71dc */

    .elementor-274063 .elementor-element.elementor-element-63fd71dc .elementor-button {
        position: relative;
        overflow: hidden;
        transition: .3s ease-in-out all;
        display: block;
    }

    .elementor-274063 .elementor-element.elementor-element-63fd71dc .elementor-button:active {
        background: #11CCA1;
    }

    .elementor-274063 .elementor-element.elementor-element-63fd71dc .elementor-button::before {
        z-index: 0;
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        height: 90%;
        width: 85%;
        background: rgba(55, 248, 203, 0.70);
        filter: blur(12px);
        content: '';
        border-radius: 50%;
        transition: .3s ease-in-out all;
        opacity: 0;
    }

    .elementor-274063 .elementor-element.elementor-element-63fd71dc .elementor-button:hover::before {
        opacity: 1;
        top: 50%;
    }

    .elementor-274063 .elementor-element.elementor-element-63fd71dc .elementor-button-icon {
        transition: .3s ease-in-out all;
    }

    .elementor-274063 .elementor-element.elementor-element-63fd71dc .elementor-button:hover .elementor-button-icon {
        transform: translateX(3px);
    }

    .elementor-274063 .elementor-element.elementor-element-63fd71dc .elementor-button-content-wrapper {
        position: relative;
        z-index: 1;
        margin-bottom: 1px;
    }

    /* End custom CSS */

    /* Start custom CSS for nav-menu, class: .elementor-element-18a63eca */

    .elementor-274063 .elementor-element.elementor-element-18a63eca .btn-menu {
        display: none;
    }

    /* End custom CSS */

    /* Start custom CSS for container, class: .elementor-element-478fa194 */

    /*.elementor-274063 .elementor-element.elementor-element-478fa194 {*/

    /*    box-shadow: 0px 1045px 250px 0px rgba(0, 0, 0, 0.00), 0px 669px 250px 0px rgba(0, 0, 0, 0.01), 0px 376px 226px 0px rgba(0, 0, 0, 0.05), 0px 2px 52px 0px rgba(0, 0, 0, 0.10);*/

    /*}*/

    .elementor-274063 .elementor-element.elementor-element-478fa194 {
        opacity: 0;
        transition: .4s ease-in-out all;
        padding: 0 !important;
        max-height: 0;
        overflow: hidden;
        pointer-events: none;
        /*visibility: hidden;*/
    }

    body.show-mobile-menu .elementor-274063 .elementor-element.elementor-element-478fa194 {
        display: flex;
        padding: 0 0 10px 0 !important;
        max-height: 300px;
        opacity: 1;
        /*visibility: visible;*/
        pointer-events: all;
    }

    /* End custom CSS */

    /* Start custom CSS for container, class: .elementor-element-45f77a65 */

    .elementor-274063 .elementor-element.elementor-element-45f77a65 {
        box-shadow: 0px 1045px 250px 0px rgba(0, 0, 0, 0.00), 0px 669px 250px 0px rgba(0, 0, 0, 0.01), 0px 376px 226px 0px rgba(0, 0, 0, 0.05), 0px 2px 52px 0px rgba(0, 0, 0, 0.10);
    }

    .elementor-274063 .elementor-element.elementor-element-45f77a65 .elementor-nav-menu--main li a.elementor-item {
        transition: .2s ease-in-out all;
    }

    .elementor-274063 .elementor-element.elementor-element-45f77a65 .elementor-nav-menu--main li.btn-menu {
        text-align: center;
    }

    .elementor-274063 .elementor-element.elementor-element-45f77a65 .elementor-nav-menu--main li.btn-menu a.elementor-item {
        display: inline-flex !important;
        color: #08483A !important;
        background: #1CD8AC;
        /*margin: 0 auto;*/
        border-radius: 8px;
        border: 1px solid #1CD8AC;
        padding: 9px 24px 9px 24px;
        margin: 0 auto !important;
        position: relative;
        overflow: hidden;
        transition: .3s ease-in-out all;
        display: block;
    }

    .elementor-274063 .elementor-element.elementor-element-45f77a65 .elementor-nav-menu--main li.btn-menu a.elementor-item:active {
        background: #11CCA1;
    }

    .elementor-274063 .elementor-element.elementor-element-45f77a65 .elementor-nav-menu--main li.btn-menu a.elementor-item::before {
        z-index: 0;
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        height: 90%;
        width: 85%;
        background: rgba(55, 248, 203, 0.70);
        filter: blur(12px);
        content: '';
        border-radius: 50%;
        transition: .3s ease-in-out all;
        opacity: 0;
    }

    .elementor-274063 .elementor-element.elementor-element-45f77a65 .elementor-nav-menu--main li.btn-menu a.elementor-item:hover {
        background: #1CD8AC !important;
    }

    .elementor-274063 .elementor-element.elementor-element-45f77a65 .elementor-nav-menu--main li.btn-menu a.elementor-item:hover::before {
        opacity: 1;
        top: 50%;
    }

    .elementor-274063 .elementor-element.elementor-element-45f77a65 .elementor-nav-menu--main li.btn-menu a.elementor-item>* {
        position: relative;
        z-index: 1;
    }

    /* End custom CSS */

    /* Start custom CSS for container, class: .elementor-element-b55241d */

    body.elementor-editor-active .elementor-274063 .elementor-element.elementor-element-b55241d {
        top: 0;
    }

    /* End custom CSS */

    /* Start custom CSS */

    .mobile-menu-btn {
        cursor: pointer;
        height: 100%;
        padding: 10px;
        align-items: center;
        justify-content: center;
        display: flex;
        /*background: #050505;*/
    }

    .mobile-menu-btn .bars {
        position: relative;
        display: block;
        width: 20px;
        height: 15px;
    }

    .mobile-menu-btn .line {
        transition: all 0.2s ease-out;
        background: #000;
        opacity: 1;
        height: 2px;
        border-radius: 4px;
        width: 100%;
        font-size: 0;
        left: 0;
        position: absolute;
        transform-origin: center center;
    }

    .mobile-menu-btn .line1 {
        top: 0;
    }

    .mobile-menu-btn .line2 {
        top: 50%;
        margin-top: -1.5px;
    }

    .mobile-menu-btn .line3 {
        top: 100%;
        margin-top: -3px;
    }

    .mobile-menu-btn:hover .line {
        opacity: 1;
    }

    body.show-mobile-menu {
        overflow: hidden;
    }

    /*body.show-mobile-menu .mobile-menu {*/

    /*    display: flex;*/

    /*}*/

    .show-mobile-menu .mobile-menu-btn .line {
        opacity: 1;
    }

    .show-mobile-menu .mobile-menu-btn .line1 {
        transform: rotate(45deg);
        top: 50%;
        margin-top: -1.5px;
    }

    .show-mobile-menu .mobile-menu-btn .line2 {
        opacity: 0;
    }

    .show-mobile-menu .mobile-menu-btn .line3 {
        transform: rotate(-45deg);
        top: 50%;
        margin-top: -1.5px;
    }

    /* End custom CSS */

    .elementor-274096 .elementor-element.elementor-element-d5e4f10 {
        --display: flex;
        --flex-direction: column;
        --container-widget-width: 100%;
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
        --padding-top: 0px;
        --padding-bottom: 60px;
        --padding-left: 20px;
        --padding-right: 20px;
    }

    .elementor-274096 .elementor-element.elementor-element-3233648e {
        --display: flex;
        --overflow: hidden;
        border-style: solid;
        --border-style: solid;
        border-width: 1px 1px 1px 1px;
        --border-top-width: 1px;
        --border-right-width: 1px;
        --border-bottom-width: 1px;
        --border-left-width: 1px;
        border-color: #DCE2EA;
        --border-color: #DCE2EA;
        --border-radius: 24px 24px 24px 24px;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-3233648e:not(.elementor-motion-effects-element-type-background),
    .elementor-274096 .elementor-element.elementor-element-3233648e>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #FFFFFF;
    }

    .elementor-274096 .elementor-element.elementor-element-549fef19 {
        --display: flex;
        --flex-direction: row;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: 100%;
        --container-widget-flex-grow: 1;
        --container-widget-align-self: stretch;
        --flex-wrap-mobile: wrap;
        --justify-content: space-between;
        --align-items: flex-start;
        --gap: 2% 2%;
        --row-gap: 2%;
        --column-gap: 2%;
        --overflow: hidden;
        border-style: solid;
        --border-style: solid;
        border-width: 0px 0px 1px 0px;
        --border-top-width: 0px;
        --border-right-width: 0px;
        --border-bottom-width: 1px;
        --border-left-width: 0px;
        border-color: #DCE2EA;
        --border-color: #DCE2EA;
        --padding-top: 45px;
        --padding-bottom: 45px;
        --padding-left: 45px;
        --padding-right: 45px;
    }

    .elementor-274096 .elementor-element.elementor-element-6b158e4d {
        --display: flex;
        --position: absolute;
        --border-radius: 50% 50% 50% 50%;
        --padding-top: 0%;
        --padding-bottom: 0%;
        --padding-left: 0%;
        --padding-right: 0%;
        top: 0%;
    }

    .elementor-274096 .elementor-element.elementor-element-6b158e4d:not(.elementor-motion-effects-element-type-background),
    .elementor-274096 .elementor-element.elementor-element-6b158e4d>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #1CD9AD30;
    }

    .elementor-274096 .elementor-element.elementor-element-6b158e4d.e-con {
        --e-con-transform-translateX: -36%;
        --e-con-transform-translateY: -53%;
    }

    body:not(.rtl) .elementor-274096 .elementor-element.elementor-element-6b158e4d {
        left: 0%;
    }

    body.rtl .elementor-274096 .elementor-element.elementor-element-6b158e4d {
        right: 0%;
    }

    .elementor-274096 .elementor-element.elementor-element-6fb78527 {
        --display: flex;
        --justify-content: flex-start;
        --align-items: flex-start;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-3c39d240>.elementor-widget-container {
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-3c39d240 img {
        width: 100%;
        max-width: 115px;
    }

    .elementor-274096 .elementor-element.elementor-element-1606eac5 {
        --display: flex;
        --justify-content: flex-start;
        --align-items: flex-start;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --gap: 25px 25px;
        --row-gap: 25px;
        --column-gap: 25px;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-35befa68.ob-harakiri {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-35befa68.ob-harakiri .elementor-heading-title {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-35befa68.ob-harakiri div {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-35befa68 .elementor-heading-title {
        font-family: "DM Sans", Sans-serif;
        font-size: 20px;
        color: #133B49;
    }

    .elementor-274096 .elementor-element.elementor-element-35befa68.ob-harakiri>div,
    .elementor-274096 .elementor-element.elementor-element-35befa68.ob-harakiri>h1,
    .elementor-274096 .elementor-element.elementor-element-35befa68.ob-harakiri>h2,
    .elementor-274096 .elementor-element.elementor-element-35befa68.ob-harakiri>h3,
    .elementor-274096 .elementor-element.elementor-element-35befa68.ob-harakiri>h4,
    .elementor-274096 .elementor-element.elementor-element-35befa68.ob-harakiri>h5,
    .elementor-274096 .elementor-element.elementor-element-35befa68.ob-harakiri>h6,
    .elementor-274096 .elementor-element.elementor-element-35befa68.ob-harakiri>p {
        transform: rotate(0deg);
    }

    .elementor-274096 .elementor-element.elementor-element-35befa68>div {
        text-indent: 0px;
        mix-blend-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-be28cb6 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
        padding-block-end: calc(14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-be28cb6 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
        margin-block-start: calc(14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-be28cb6 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
        margin-inline: calc(14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-be28cb6 .elementor-icon-list-items.elementor-inline-items {
        margin-inline: calc(-14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-be28cb6 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
        inset-inline-end: calc(-14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-be28cb6 .elementor-icon-list-icon i {
        transition: color 0.3s;
    }

    .elementor-274096 .elementor-element.elementor-element-be28cb6 .elementor-icon-list-icon svg {
        transition: fill 0.3s;
    }

    .elementor-274096 .elementor-element.elementor-element-be28cb6 {
        --e-icon-list-icon-size: 14px;
        --icon-vertical-offset: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-be28cb6 .elementor-icon-list-item>.elementor-icon-list-text,
    .elementor-274096 .elementor-element.elementor-element-be28cb6 .elementor-icon-list-item>a {
        font-family: "DM Sans", Sans-serif;
        font-size: 16px;
    }

    .elementor-274096 .elementor-element.elementor-element-be28cb6 .elementor-icon-list-text {
        color: #4C617B;
        transition: color 0.3s;
    }

    .elementor-274096 .elementor-element.elementor-element-60b44df2 {
        --display: flex;
        --justify-content: flex-start;
        --align-items: flex-start;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --gap: 25px 25px;
        --row-gap: 25px;
        --column-gap: 25px;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-2f73e69c.ob-harakiri {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-2f73e69c.ob-harakiri .elementor-heading-title {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-2f73e69c.ob-harakiri div {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-2f73e69c .elementor-heading-title {
        font-family: "DM Sans", Sans-serif;
        font-size: 20px;
        color: #133B49;
    }

    .elementor-274096 .elementor-element.elementor-element-2f73e69c.ob-harakiri>div,
    .elementor-274096 .elementor-element.elementor-element-2f73e69c.ob-harakiri>h1,
    .elementor-274096 .elementor-element.elementor-element-2f73e69c.ob-harakiri>h2,
    .elementor-274096 .elementor-element.elementor-element-2f73e69c.ob-harakiri>h3,
    .elementor-274096 .elementor-element.elementor-element-2f73e69c.ob-harakiri>h4,
    .elementor-274096 .elementor-element.elementor-element-2f73e69c.ob-harakiri>h5,
    .elementor-274096 .elementor-element.elementor-element-2f73e69c.ob-harakiri>h6,
    .elementor-274096 .elementor-element.elementor-element-2f73e69c.ob-harakiri>p {
        transform: rotate(0deg);
    }

    .elementor-274096 .elementor-element.elementor-element-2f73e69c>div {
        text-indent: 0px;
        mix-blend-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-317809f .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
        padding-block-end: calc(14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-317809f .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
        margin-block-start: calc(14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-317809f .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
        margin-inline: calc(14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-317809f .elementor-icon-list-items.elementor-inline-items {
        margin-inline: calc(-14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-317809f .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
        inset-inline-end: calc(-14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-317809f .elementor-icon-list-icon i {
        transition: color 0.3s;
    }

    .elementor-274096 .elementor-element.elementor-element-317809f .elementor-icon-list-icon svg {
        transition: fill 0.3s;
    }

    .elementor-274096 .elementor-element.elementor-element-317809f {
        --e-icon-list-icon-size: 14px;
        --icon-vertical-offset: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-317809f .elementor-icon-list-item>.elementor-icon-list-text,
    .elementor-274096 .elementor-element.elementor-element-317809f .elementor-icon-list-item>a {
        font-family: "DM Sans", Sans-serif;
        font-size: 16px;
    }

    .elementor-274096 .elementor-element.elementor-element-317809f .elementor-icon-list-text {
        color: #4C617B;
        transition: color 0.3s;
    }

    .elementor-274096 .elementor-element.elementor-element-49845b1b {
        --display: flex;
        --justify-content: flex-start;
        --align-items: flex-start;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --gap: 25px 25px;
        --row-gap: 25px;
        --column-gap: 25px;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-5c6424cd.ob-harakiri {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-5c6424cd.ob-harakiri .elementor-heading-title {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-5c6424cd.ob-harakiri div {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-5c6424cd .elementor-heading-title {
        font-family: "DM Sans", Sans-serif;
        font-size: 20px;
        color: #133B49;
    }

    .elementor-274096 .elementor-element.elementor-element-5c6424cd.ob-harakiri>div,
    .elementor-274096 .elementor-element.elementor-element-5c6424cd.ob-harakiri>h1,
    .elementor-274096 .elementor-element.elementor-element-5c6424cd.ob-harakiri>h2,
    .elementor-274096 .elementor-element.elementor-element-5c6424cd.ob-harakiri>h3,
    .elementor-274096 .elementor-element.elementor-element-5c6424cd.ob-harakiri>h4,
    .elementor-274096 .elementor-element.elementor-element-5c6424cd.ob-harakiri>h5,
    .elementor-274096 .elementor-element.elementor-element-5c6424cd.ob-harakiri>h6,
    .elementor-274096 .elementor-element.elementor-element-5c6424cd.ob-harakiri>p {
        transform: rotate(0deg);
    }

    .elementor-274096 .elementor-element.elementor-element-5c6424cd>div {
        text-indent: 0px;
        mix-blend-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-68fef1d .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
        padding-block-end: calc(14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-68fef1d .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
        margin-block-start: calc(14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-68fef1d .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
        margin-inline: calc(14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-68fef1d .elementor-icon-list-items.elementor-inline-items {
        margin-inline: calc(-14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-68fef1d .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
        inset-inline-end: calc(-14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-68fef1d .elementor-icon-list-icon i {
        transition: color 0.3s;
    }

    .elementor-274096 .elementor-element.elementor-element-68fef1d .elementor-icon-list-icon svg {
        transition: fill 0.3s;
    }

    .elementor-274096 .elementor-element.elementor-element-68fef1d {
        --e-icon-list-icon-size: 14px;
        --icon-vertical-offset: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-68fef1d .elementor-icon-list-item>.elementor-icon-list-text,
    .elementor-274096 .elementor-element.elementor-element-68fef1d .elementor-icon-list-item>a {
        font-family: "DM Sans", Sans-serif;
        font-size: 16px;
    }

    .elementor-274096 .elementor-element.elementor-element-68fef1d .elementor-icon-list-text {
        color: #4C617B;
        transition: color 0.3s;
    }

    .elementor-274096 .elementor-element.elementor-element-d42702 {
        --display: flex;
        --justify-content: flex-start;
        --align-items: flex-start;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --gap: 25px 25px;
        --row-gap: 25px;
        --column-gap: 25px;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-1fae3b38.ob-harakiri {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-1fae3b38.ob-harakiri .elementor-heading-title {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-1fae3b38.ob-harakiri div {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-1fae3b38 .elementor-heading-title {
        font-family: "DM Sans", Sans-serif;
        font-size: 20px;
        color: #133B49;
    }

    .elementor-274096 .elementor-element.elementor-element-1fae3b38.ob-harakiri>div,
    .elementor-274096 .elementor-element.elementor-element-1fae3b38.ob-harakiri>h1,
    .elementor-274096 .elementor-element.elementor-element-1fae3b38.ob-harakiri>h2,
    .elementor-274096 .elementor-element.elementor-element-1fae3b38.ob-harakiri>h3,
    .elementor-274096 .elementor-element.elementor-element-1fae3b38.ob-harakiri>h4,
    .elementor-274096 .elementor-element.elementor-element-1fae3b38.ob-harakiri>h5,
    .elementor-274096 .elementor-element.elementor-element-1fae3b38.ob-harakiri>h6,
    .elementor-274096 .elementor-element.elementor-element-1fae3b38.ob-harakiri>p {
        transform: rotate(0deg);
    }

    .elementor-274096 .elementor-element.elementor-element-1fae3b38>div {
        text-indent: 0px;
        mix-blend-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-4d5ffff4 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
        padding-block-end: calc(14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-4d5ffff4 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
        margin-block-start: calc(14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-4d5ffff4 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
        margin-inline: calc(14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-4d5ffff4 .elementor-icon-list-items.elementor-inline-items {
        margin-inline: calc(-14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-4d5ffff4 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
        inset-inline-end: calc(-14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-4d5ffff4 .elementor-icon-list-icon i {
        transition: color 0.3s;
    }

    .elementor-274096 .elementor-element.elementor-element-4d5ffff4 .elementor-icon-list-icon svg {
        transition: fill 0.3s;
    }

    .elementor-274096 .elementor-element.elementor-element-4d5ffff4 {
        --e-icon-list-icon-size: 14px;
        --icon-vertical-offset: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-4d5ffff4 .elementor-icon-list-item>.elementor-icon-list-text,
    .elementor-274096 .elementor-element.elementor-element-4d5ffff4 .elementor-icon-list-item>a {
        font-family: "DM Sans", Sans-serif;
        font-size: 16px;
    }

    .elementor-274096 .elementor-element.elementor-element-4d5ffff4 .elementor-icon-list-text {
        color: #4C617B;
        transition: color 0.3s;
    }

    .elementor-274096 .elementor-element.elementor-element-60ff3dc5 {
        --display: flex;
        --justify-content: flex-start;
        --align-items: flex-start;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --gap: 25px 25px;
        --row-gap: 25px;
        --column-gap: 25px;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-49eb6a8e.ob-harakiri {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-49eb6a8e.ob-harakiri .elementor-heading-title {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-49eb6a8e.ob-harakiri div {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-49eb6a8e .elementor-heading-title {
        font-family: "DM Sans", Sans-serif;
        font-size: 20px;
        color: #133B49;
    }

    .elementor-274096 .elementor-element.elementor-element-49eb6a8e.ob-harakiri>div,
    .elementor-274096 .elementor-element.elementor-element-49eb6a8e.ob-harakiri>h1,
    .elementor-274096 .elementor-element.elementor-element-49eb6a8e.ob-harakiri>h2,
    .elementor-274096 .elementor-element.elementor-element-49eb6a8e.ob-harakiri>h3,
    .elementor-274096 .elementor-element.elementor-element-49eb6a8e.ob-harakiri>h4,
    .elementor-274096 .elementor-element.elementor-element-49eb6a8e.ob-harakiri>h5,
    .elementor-274096 .elementor-element.elementor-element-49eb6a8e.ob-harakiri>h6,
    .elementor-274096 .elementor-element.elementor-element-49eb6a8e.ob-harakiri>p {
        transform: rotate(0deg);
    }

    .elementor-274096 .elementor-element.elementor-element-49eb6a8e>div {
        text-indent: 0px;
        mix-blend-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-8a6e1b5 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
        padding-block-end: calc(14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-8a6e1b5 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
        margin-block-start: calc(14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-8a6e1b5 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
        margin-inline: calc(14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-8a6e1b5 .elementor-icon-list-items.elementor-inline-items {
        margin-inline: calc(-14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-8a6e1b5 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
        inset-inline-end: calc(-14px/2);
    }

    .elementor-274096 .elementor-element.elementor-element-8a6e1b5 .elementor-icon-list-icon i {
        transition: color 0.3s;
    }

    .elementor-274096 .elementor-element.elementor-element-8a6e1b5 .elementor-icon-list-icon svg {
        transition: fill 0.3s;
    }

    .elementor-274096 .elementor-element.elementor-element-8a6e1b5 {
        --e-icon-list-icon-size: 14px;
        --icon-vertical-offset: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-8a6e1b5 .elementor-icon-list-item>.elementor-icon-list-text,
    .elementor-274096 .elementor-element.elementor-element-8a6e1b5 .elementor-icon-list-item>a {
        font-family: "DM Sans", Sans-serif;
        font-size: 16px;
    }

    .elementor-274096 .elementor-element.elementor-element-8a6e1b5 .elementor-icon-list-text {
        color: #4C617B;
        transition: color 0.3s;
    }

    .elementor-274096 .elementor-element.elementor-element-5d8186fa {
        --display: flex;
        --justify-content: flex-start;
        --align-items: flex-start;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --gap: 25px 25px;
        --row-gap: 25px;
        --column-gap: 25px;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-62448c0 {
        --grid-template-columns: repeat(0, auto);
        width: initial;
        max-width: initial;
        --icon-size: 27px;
        --grid-column-gap: 25px;
        --grid-row-gap: 18px;
    }

    .elementor-274096 .elementor-element.elementor-element-62448c0 .elementor-social-icon {
        background-color: #FFFFFF00;
        --icon-padding: 0em;
    }

    .elementor-274096 .elementor-element.elementor-element-62448c0 .elementor-social-icon i {
        color: #4C617B;
    }

    .elementor-274096 .elementor-element.elementor-element-62448c0 .elementor-social-icon svg {
        fill: #4C617B;
    }

    .elementor-274096 .elementor-element.elementor-element-55ad1aca {
        --display: flex;
        --flex-direction: row;
        --container-widget-width: initial;
        --container-widget-height: 100%;
        --container-widget-flex-grow: 1;
        --container-widget-align-self: stretch;
        --flex-wrap-mobile: wrap;
        --gap: 2% 2%;
        --row-gap: 2%;
        --column-gap: 2%;
        --overflow: hidden;
        --padding-top: 45px;
        --padding-bottom: 45px;
        --padding-left: 45px;
        --padding-right: 45px;
    }

    .elementor-274096 .elementor-element.elementor-element-346f4762 {
        --display: flex;
        --position: absolute;
        --border-radius: 50% 50% 50% 50%;
        --padding-top: 0%;
        --padding-bottom: 0%;
        --padding-left: 0%;
        --padding-right: 0%;
        top: 100%;
    }

    .elementor-274096 .elementor-element.elementor-element-346f4762:not(.elementor-motion-effects-element-type-background),
    .elementor-274096 .elementor-element.elementor-element-346f4762>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #7D38BCB2;
    }

    .elementor-274096 .elementor-element.elementor-element-346f4762.e-con {
        --e-con-transform-translateX: -69%;
        --e-con-transform-translateY: 42%;
    }

    body:not(.rtl) .elementor-274096 .elementor-element.elementor-element-346f4762 {
        right: 0px;
    }

    body.rtl .elementor-274096 .elementor-element.elementor-element-346f4762 {
        left: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-1711984f {
        --display: flex;
        --position: absolute;
        --border-radius: 50% 50% 50% 50%;
        --padding-top: 0%;
        --padding-bottom: 0%;
        --padding-left: 0%;
        --padding-right: 0%;
        top: 100%;
    }

    .elementor-274096 .elementor-element.elementor-element-1711984f:not(.elementor-motion-effects-element-type-background),
    .elementor-274096 .elementor-element.elementor-element-1711984f>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #44A9CF;
    }

    .elementor-274096 .elementor-element.elementor-element-1711984f.e-con {
        --e-con-transform-translateX: 27%;
        --e-con-transform-translateY: -30%;
    }

    body:not(.rtl) .elementor-274096 .elementor-element.elementor-element-1711984f {
        right: 0px;
    }

    body.rtl .elementor-274096 .elementor-element.elementor-element-1711984f {
        left: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-3ec2885b {
        --display: flex;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-dae550e .elementor-icon-box-wrapper {
        align-items: start;
        text-align: start;
        gap: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-dae550e .elementor-icon-box-title {
        margin-block-end: 5px;
        color: #4C617B;
    }

    .elementor-274096 .elementor-element.elementor-element-dae550e .elementor-icon {
        font-size: 36px;
    }

    .elementor-274096 .elementor-element.elementor-element-dae550e .elementor-icon-box-img {
        overflow: hidden;
    }

    .elementor-274096 .elementor-element.elementor-element-dae550e .elementor-icon-box-title,
    .elementor-274096 .elementor-element.elementor-element-dae550e .elementor-icon-box-title a {
        font-family: "DM Sans", Sans-serif;
        font-size: 28px;
        font-weight: 500;
    }

    .elementor-274096 .elementor-element.elementor-element-dae550e .elementor-icon-box-description {
        font-family: "DM Sans", Sans-serif;
        font-size: 16px;
        color: #4C617B;
    }

    .elementor-274096 .elementor-element.elementor-element-74bc01cc {
        --display: flex;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-4d63027f .elementor-icon-box-wrapper {
        align-items: start;
        text-align: start;
        gap: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-4d63027f .elementor-icon-box-title {
        margin-block-end: 5px;
        color: #4C617B;
    }

    .elementor-274096 .elementor-element.elementor-element-4d63027f .elementor-icon {
        font-size: 36px;
    }

    .elementor-274096 .elementor-element.elementor-element-4d63027f .elementor-icon-box-img {
        overflow: hidden;
    }

    .elementor-274096 .elementor-element.elementor-element-4d63027f .elementor-icon-box-title,
    .elementor-274096 .elementor-element.elementor-element-4d63027f .elementor-icon-box-title a {
        font-family: "DM Sans", Sans-serif;
        font-size: 28px;
        font-weight: 500;
    }

    .elementor-274096 .elementor-element.elementor-element-4d63027f .elementor-icon-box-description {
        font-family: "DM Sans", Sans-serif;
        font-size: 16px;
        color: #4C617B;
    }

    .elementor-274096 .elementor-element.elementor-element-e5f6aa3 {
        --display: flex;
        --justify-content: space-between;
        --margin-top: 0;
        --margin-bottom: 0;
        --margin-left: auto;
        --margin-right: 0;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-bade93d {
        --display: flex;
        --flex-direction: row;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: 100%;
        --container-widget-flex-grow: 1;
        --container-widget-align-self: stretch;
        --flex-wrap-mobile: wrap;
        --justify-content: flex-end;
        --align-items: center;
        --gap: 15px 23px;
        --row-gap: 15px;
        --column-gap: 23px;
        --flex-wrap: wrap;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-d3891a2 {
        width: var(--container-widget-width, 60px);
        max-width: 60px;
        --container-widget-width: 60px;
        --container-widget-flex-grow: 0;
    }

    .elementor-274096 .elementor-element.elementor-element-a25f6d5.ob-harakiri {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-a25f6d5.ob-harakiri .elementor-heading-title {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-a25f6d5.ob-harakiri div {
        writing-mode: inherit;
    }

    .elementor-274096 .elementor-element.elementor-element-a25f6d5>.elementor-widget-container {
        padding: 25px 0px 0px 0px;
    }

    .elementor-274096 .elementor-element.elementor-element-a25f6d5 {
        text-align: end;
        font-family: "DM Sans", Sans-serif;
        font-size: 16px;
        font-weight: 300;
        color: #4C617B;
    }

    .elementor-274096 .elementor-element.elementor-element-a25f6d5 a {
        color: #4C617B;
    }

    .elementor-274096 .elementor-element.elementor-element-a25f6d5.ob-harakiri>div,
    .elementor-274096 .elementor-element.elementor-element-a25f6d5.ob-harakiri>h1,
    .elementor-274096 .elementor-element.elementor-element-a25f6d5.ob-harakiri>h2,
    .elementor-274096 .elementor-element.elementor-element-a25f6d5.ob-harakiri>h3,
    .elementor-274096 .elementor-element.elementor-element-a25f6d5.ob-harakiri>h4,
    .elementor-274096 .elementor-element.elementor-element-a25f6d5.ob-harakiri>h5,
    .elementor-274096 .elementor-element.elementor-element-a25f6d5.ob-harakiri>h6,
    .elementor-274096 .elementor-element.elementor-element-a25f6d5.ob-harakiri>p {
        transform: rotate(0deg);
    }

    .elementor-274096 .elementor-element.elementor-element-a25f6d5>div {
        text-indent: 0px;
        mix-blend-mode: inherit;
    }

    @media(max-width:1024px) {
        .elementor-274096 .elementor-element.elementor-element-549fef19 {
            --gap: 0% 2%;
            --row-gap: 0%;
            --column-gap: 2%;
            --flex-wrap: wrap;
            --padding-top: 35px;
            --padding-bottom: 35px;
            --padding-left: 35px;
            --padding-right: 35px;
        }

        .elementor-274096 .elementor-element.elementor-element-3c39d240 {
            width: var(--container-widget-width, 100%);
            max-width: 100%;
            --container-widget-width: 100%;
            --container-widget-flex-grow: 0;
            text-align: start;
        }

        .elementor-274096 .elementor-element.elementor-element-3c39d240>.elementor-widget-container {
            margin: 0px 0px 50px 0px;
        }

        .elementor-274096 .elementor-element.elementor-element-3c39d240 img {
            max-width: 137px;
        }

        .elementor-274096 .elementor-element.elementor-element-1606eac5 {
            --margin-top: 0px;
            --margin-bottom: 40px;
            --margin-left: 0px;
            --margin-right: 0px;
        }

        .elementor-274096 .elementor-element.elementor-element-60b44df2 {
            --margin-top: 0px;
            --margin-bottom: 40px;
            --margin-left: 0px;
            --margin-right: 0px;
        }

        .elementor-274096 .elementor-element.elementor-element-49845b1b {
            --margin-top: 0px;
            --margin-bottom: 40px;
            --margin-left: 0px;
            --margin-right: 0px;
        }

        .elementor-274096 .elementor-element.elementor-element-d42702 {
            --margin-top: 0px;
            --margin-bottom: 40px;
            --margin-left: 0px;
            --margin-right: 0px;
        }

        .elementor-274096 .elementor-element.elementor-element-5d8186fa {
            --margin-top: 0px;
            --margin-bottom: 40px;
            --margin-left: 0px;
            --margin-right: 0px;
        }

        .elementor-274096 .elementor-element.elementor-element-62448c0 {
            --container-widget-width: 150px;
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, 150px);
            max-width: 150px;
        }

        .elementor-274096 .elementor-element.elementor-element-55ad1aca {
            --gap: 4% 4%;
            --row-gap: 4%;
            --column-gap: 4%;
            --flex-wrap: wrap;
            --padding-top: 35px;
            --padding-bottom: 35px;
            --padding-left: 35px;
            --padding-right: 35px;
        }

        .elementor-274096 .elementor-element.elementor-element-dae550e .elementor-icon-box-title,
        .elementor-274096 .elementor-element.elementor-element-dae550e .elementor-icon-box-title a {
            font-size: 24px;
        }

        .elementor-274096 .elementor-element.elementor-element-4d63027f .elementor-icon-box-title,
        .elementor-274096 .elementor-element.elementor-element-4d63027f .elementor-icon-box-title a {
            font-size: 24px;
        }

        .elementor-274096 .elementor-element.elementor-element-e5f6aa3 {
            --padding-top: 30px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px;
        }

        .elementor-274096 .elementor-element.elementor-element-bade93d {
            --justify-content: center;
        }

        .elementor-274096 .elementor-element.elementor-element-a25f6d5>.elementor-widget-container {
            padding: 30px 0px 0px 0px;
        }

        .elementor-274096 .elementor-element.elementor-element-a25f6d5 {
            text-align: center;
        }
    }

    @media(max-width:767px) {
        .elementor-274096 .elementor-element.elementor-element-549fef19 {
            --gap: 4% 4%;
            --row-gap: 4%;
            --column-gap: 4%;
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px;
        }

        .elementor-274096 .elementor-element.elementor-element-6b158e4d.e-con {
            --e-con-transform-translateX: -59%;
            --e-con-transform-translateY: 0%;
        }

        .elementor-274096 .elementor-element.elementor-element-6b158e4d {
            --width: 700px;
        }

        .elementor-274096 .elementor-element.elementor-element-6fb78527 {
            --padding-top: 0px;
            --padding-bottom: 40px;
            --padding-left: 0px;
            --padding-right: 0px;
        }

        .elementor-274096 .elementor-element.elementor-element-3c39d240>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-274096 .elementor-element.elementor-element-3c39d240 {
            text-align: start;
        }

        .elementor-274096 .elementor-element.elementor-element-3c39d240 img {
            max-width: 137px;
        }

        .elementor-274096 .elementor-element.elementor-element-1606eac5 {
            --width: 48%;
        }

        .elementor-274096 .elementor-element.elementor-element-35befa68 .elementor-heading-title {
            font-size: 18px;
        }

        .elementor-274096 .elementor-element.elementor-element-60b44df2 {
            --width: 48%;
        }

        .elementor-274096 .elementor-element.elementor-element-2f73e69c .elementor-heading-title {
            font-size: 18px;
        }

        .elementor-274096 .elementor-element.elementor-element-49845b1b {
            --width: 48%;
        }

        .elementor-274096 .elementor-element.elementor-element-5c6424cd .elementor-heading-title {
            font-size: 18px;
        }

        .elementor-274096 .elementor-element.elementor-element-d42702 {
            --width: 48%;
        }

        .elementor-274096 .elementor-element.elementor-element-1fae3b38 .elementor-heading-title {
            font-size: 18px;
        }

        .elementor-274096 .elementor-element.elementor-element-60ff3dc5 {
            --margin-top: 0px;
            --margin-bottom: 40px;
            --margin-left: 0px;
            --margin-right: 0px;
        }

        .elementor-274096 .elementor-element.elementor-element-49eb6a8e .elementor-heading-title {
            font-size: 18px;
        }

        .elementor-274096 .elementor-element.elementor-element-5d8186fa {
            --gap: 15px 15px;
            --row-gap: 15px;
            --column-gap: 15px;
            --margin-top: 0px;
            --margin-bottom: 10px;
            --margin-left: 0px;
            --margin-right: 0px;
        }

        .elementor-274096 .elementor-element.elementor-element-62448c0 {
            --container-widget-width: 100%;
            --container-widget-flex-grow: 0;
            width: var(--container-widget-width, 100%);
            max-width: 100%;
            --icon-size: 25px;
            --grid-column-gap: 20px;
        }

        .elementor-274096 .elementor-element.elementor-element-55ad1aca {
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px;
        }

        .elementor-274096 .elementor-element.elementor-element-346f4762.e-con {
            --e-con-transform-translateX: -10%;
        }

        .elementor-274096 .elementor-element.elementor-element-1711984f.e-con {
            --e-con-transform-translateX: 52%;
        }

        .elementor-274096 .elementor-element.elementor-element-dae550e>.elementor-widget-container {
            margin: 0px 0px 30px 0px;
        }

        .elementor-274096 .elementor-element.elementor-element-dae550e .elementor-icon-box-wrapper {
            gap: 0px;
        }

        .elementor-274096 .elementor-element.elementor-element-dae550e .elementor-icon {
            font-size: 30px;
        }

        .elementor-274096 .elementor-element.elementor-element-dae550e .elementor-icon-box-title,
        .elementor-274096 .elementor-element.elementor-element-dae550e .elementor-icon-box-title a {
            font-size: 20px;
        }

        .elementor-274096 .elementor-element.elementor-element-dae550e .elementor-icon-box-description {
            font-size: 15px;
        }

        .elementor-274096 .elementor-element.elementor-element-4d63027f>.elementor-widget-container {
            margin: 0px 0px 30px 0px;
        }

        .elementor-274096 .elementor-element.elementor-element-4d63027f .elementor-icon-box-wrapper {
            gap: 0px;
        }

        .elementor-274096 .elementor-element.elementor-element-4d63027f .elementor-icon {
            font-size: 30px;
        }

        .elementor-274096 .elementor-element.elementor-element-4d63027f .elementor-icon-box-title,
        .elementor-274096 .elementor-element.elementor-element-4d63027f .elementor-icon-box-title a {
            font-size: 20px;
        }

        .elementor-274096 .elementor-element.elementor-element-4d63027f .elementor-icon-box-description {
            font-size: 15px;
        }

        .elementor-274096 .elementor-element.elementor-element-e5f6aa3 {
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px;
        }

        .elementor-274096 .elementor-element.elementor-element-bade93d {
            --justify-content: flex-start;
            --gap: 15px 15px;
            --row-gap: 15px;
            --column-gap: 15px;
        }

        .elementor-274096 .elementor-element.elementor-element-a25f6d5 {
            text-align: start;
        }
    }

    @media(min-width:768px) {
        .elementor-274096 .elementor-element.elementor-element-d5e4f10 {
            --content-width: 1400px;
        }

        .elementor-274096 .elementor-element.elementor-element-6b158e4d {
            --width: 970px;
        }

        .elementor-274096 .elementor-element.elementor-element-6fb78527 {
            --width: 12%;
        }

        .elementor-274096 .elementor-element.elementor-element-1606eac5 {
            --width: 13%;
        }

        .elementor-274096 .elementor-element.elementor-element-60b44df2 {
            --width: 11%;
        }

        .elementor-274096 .elementor-element.elementor-element-49845b1b {
            --width: 11%;
        }

        .elementor-274096 .elementor-element.elementor-element-d42702 {
            --width: 13%;
        }

        .elementor-274096 .elementor-element.elementor-element-60ff3dc5 {
            --width: 20%;
        }

        .elementor-274096 .elementor-element.elementor-element-5d8186fa {
            --width: 13%;
        }

        .elementor-274096 .elementor-element.elementor-element-346f4762 {
            --width: 344px;
        }

        .elementor-274096 .elementor-element.elementor-element-1711984f {
            --width: 344px;
        }

        .elementor-274096 .elementor-element.elementor-element-3ec2885b {
            --width: 25%;
        }

        .elementor-274096 .elementor-element.elementor-element-74bc01cc {
            --width: 30%;
        }

        .elementor-274096 .elementor-element.elementor-element-e5f6aa3 {
            --width: 40%;
        }

        .elementor-274096 .elementor-element.elementor-element-bade93d {
            --width: 100%;
        }
    }

    @media(max-width:1024px) and (min-width:768px) {
        .elementor-274096 .elementor-element.elementor-element-6fb78527 {
            --width: 100%;
        }

        .elementor-274096 .elementor-element.elementor-element-1606eac5 {
            --width: 32%;
        }

        .elementor-274096 .elementor-element.elementor-element-60b44df2 {
            --width: 32%;
        }

        .elementor-274096 .elementor-element.elementor-element-49845b1b {
            --width: 32%;
        }

        .elementor-274096 .elementor-element.elementor-element-d42702 {
            --width: 32%;
        }

        .elementor-274096 .elementor-element.elementor-element-60ff3dc5 {
            --width: 32%;
        }

        .elementor-274096 .elementor-element.elementor-element-5d8186fa {
            --width: 32%;
        }

        .elementor-274096 .elementor-element.elementor-element-3ec2885b {
            --width: 48%;
        }

        .elementor-274096 .elementor-element.elementor-element-74bc01cc {
            --width: 48%;
        }

        .elementor-274096 .elementor-element.elementor-element-e5f6aa3 {
            --width: 100%;
        }
    }

    /* Start custom CSS for container, class: .elementor-element-6b158e4d */

    .elementor-274096 .elementor-element.elementor-element-6b158e4d {
        aspect-ratio: 97 / 47;
        filter: blur(220px);
    }

    /* End custom CSS */

    /* Start custom CSS for image, class: .elementor-element-3c39d240 */

    .elementor-274096 .elementor-element.elementor-element-3c39d240 img {
        display: block;
    }

    /* End custom CSS */

    /* Start custom CSS for social-icons, class: .elementor-element-62448c0 */

    .elementor-274096 .elementor-element.elementor-element-62448c0 {
        /*max-width: 135px !important;*/
    }

    /*.elementor-274096 .elementor-element.elementor-element-62448c0 a:hover svg path {*/

    /*    fill:#19D3A8;*/

    /*} */

    @media (max-width:768px) {
        .elementor-274096 .elementor-element.elementor-element-62448c0 {
            max-width: none !important;
        }
    }

    /* End custom CSS */

    /* Start custom CSS for container, class: .elementor-element-5d8186fa */

    .elementor-274096 .elementor-element.elementor-element-5d8186fa {
        min-width: 132px;
    }

    /* End custom CSS */

    /* Start custom CSS for container, class: .elementor-element-346f4762 */

    .elementor-274096 .elementor-element.elementor-element-346f4762 {
        aspect-ratio: 34 / 26;
        filter: blur(224px);
    }

    /* End custom CSS */

    /* Start custom CSS for container, class: .elementor-element-1711984f */

    .elementor-274096 .elementor-element.elementor-element-1711984f {
        aspect-ratio: 34 / 26;
        filter: blur(224px);
    }

    /* End custom CSS */

    /* Start custom CSS for text-editor, class: .elementor-element-a25f6d5 */

    /*.elementor-274096 .elementor-element.elementor-element-a25f6d5 a {*/

    /*    transition: .2s ease-in-out all;   */

    /*}*/

    /*.elementor-274096 .elementor-element.elementor-element-a25f6d5 a:hover {*/

    /*    text-decoration: underline;*/

    /*}*/

    .elementor-274096 .elementor-element.elementor-element-a25f6d5 p {
        margin-bottom: 0;
    }

    /* End custom CSS */

    /* Start custom CSS for container, class: .elementor-element-55ad1aca */

    .elementor-274096 .elementor-element.elementor-element-55ad1aca .elementor-icon-box-wrapper {
        display: flex;
    }

    /*
.elementor-274096 .elementor-element.elementor-element-55ad1aca .elementor-icon-box-icon {
    padding-top: 5px;
}

.elementor-274096 .elementor-element.elementor-element-55ad1aca .elementor-icon-box-wrapper .elementor-icon {
}
*/

    .elementor-274096 .elementor-element.elementor-element-55ad1aca .elementor-icon-box-title {
        margin-top: 0;
    }

    .elementor-274096 .elementor-element.elementor-element-55ad1aca .elementor-icon-box-content {
        padding-left: 15px;
    }

    .elementor-274096 .elementor-element.elementor-element-55ad1aca .elementor-icon-box-description {
        max-width: 280px;
    }

    /* End custom CSS */

    .elementor-205843 .elementor-element.elementor-element-57aa8b6f {
        --display: flex;
        --position: fixed;
        --flex-direction: column;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
        --align-items: flex-end;
        --gap: 6px 6px;
        --row-gap: 6px;
        --column-gap: 6px;
        --flex-wrap: nowrap;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
        bottom: 20px;
        --z-index: 1000;
    }

    .elementor-205843 .elementor-element.elementor-element-57aa8b6f.e-con {
        --align-self: flex-end;
    }

    body:not(.rtl) .elementor-205843 .elementor-element.elementor-element-57aa8b6f {
        right: 15px;
    }

    body.rtl .elementor-205843 .elementor-element.elementor-element-57aa8b6f {
        left: 15px;
    }

    .elementor-205843 .elementor-element.elementor-element-6e198ac5 {
        --display: flex;
        --min-height: 60px;
        --justify-content: center;
        --align-items: center;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        border-style: solid;
        --border-style: solid;
        border-width: 2px 2px 2px 2px;
        --border-top-width: 2px;
        --border-right-width: 2px;
        --border-bottom-width: 2px;
        --border-left-width: 2px;
        border-color: var(--e-global-color-ca85951);
        --border-color: var(--e-global-color-ca85951);
        --border-radius: 50% 50% 50% 50%;
    }

    .elementor-205843 .elementor-element.elementor-element-6e198ac5:not(.elementor-motion-effects-element-type-background),
    .elementor-205843 .elementor-element.elementor-element-6e198ac5>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #FFFFFF;
    }

    .elementor-205843 .elementor-element.elementor-element-6e198ac5.e-con {
        --flex-grow: 0;
        --flex-shrink: 0;
    }

    .elementor-205843 .elementor-element.elementor-element-ffce3cb .elementor-icon-wrapper {
        text-align: center;
    }

    .elementor-205843 .elementor-element.elementor-element-ffce3cb .elementor-icon {
        font-size: 28px;
    }

    .elementor-205843 .elementor-element.elementor-element-ffce3cb .elementor-icon svg {
        height: 28px;
    }

    .elementor-205843 .elementor-element.elementor-element-343c1844.ob-harakiri {
        writing-mode: inherit;
    }

    .elementor-205843 .elementor-element.elementor-element-343c1844.ob-harakiri .elementor-heading-title {
        writing-mode: inherit;
    }

    .elementor-205843 .elementor-element.elementor-element-343c1844.ob-harakiri div {
        writing-mode: inherit;
    }

    .elementor-205843 .elementor-element.elementor-element-343c1844>.elementor-widget-container {
        background-color: #FFFFFF;
        padding: 12px 12px 12px 12px;
        border-style: solid;
        border-width: 1px 1px 1px 1px;
        border-color: #E4E4E4;
        border-radius: 12px 12px 0px 12px;
        box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.13);
    }

    body:not(.rtl) .elementor-205843 .elementor-element.elementor-element-343c1844 {
        right: 70px;
    }

    body.rtl .elementor-205843 .elementor-element.elementor-element-343c1844 {
        left: 70px;
    }

    .elementor-205843 .elementor-element.elementor-element-343c1844 {
        top: 8px;
        text-align: center;
    }

    .elementor-205843 .elementor-element.elementor-element-343c1844 .elementor-heading-title {
        font-family: "Roboto", Sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: #606060;
    }

    .elementor-205843 .elementor-element.elementor-element-343c1844.ob-harakiri>div,
    .elementor-205843 .elementor-element.elementor-element-343c1844.ob-harakiri>h1,
    .elementor-205843 .elementor-element.elementor-element-343c1844.ob-harakiri>h2,
    .elementor-205843 .elementor-element.elementor-element-343c1844.ob-harakiri>h3,
    .elementor-205843 .elementor-element.elementor-element-343c1844.ob-harakiri>h4,
    .elementor-205843 .elementor-element.elementor-element-343c1844.ob-harakiri>h5,
    .elementor-205843 .elementor-element.elementor-element-343c1844.ob-harakiri>h6,
    .elementor-205843 .elementor-element.elementor-element-343c1844.ob-harakiri>p {
        transform: rotate(0deg);
    }

    .elementor-205843 .elementor-element.elementor-element-343c1844>div {
        text-indent: 0px;
        mix-blend-mode: inherit;
    }

    .elementor-205843 .elementor-element.elementor-element-7d20bfa9 {
        --display: flex;
        --position: fixed;
        --flex-direction: column;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
        --align-items: flex-end;
        --gap: 6px 6px;
        --row-gap: 6px;
        --column-gap: 6px;
        --flex-wrap: nowrap;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
        bottom: 20px;
        --z-index: 1000;
    }

    .elementor-205843 .elementor-element.elementor-element-7d20bfa9.e-con {
        --align-self: flex-end;
    }

    body:not(.rtl) .elementor-205843 .elementor-element.elementor-element-7d20bfa9 {
        right: 15px;
    }

    body.rtl .elementor-205843 .elementor-element.elementor-element-7d20bfa9 {
        left: 15px;
    }

    .elementor-205843 .elementor-element.elementor-element-1daecca4 {
        --display: flex;
        --min-height: 60px;
        --justify-content: center;
        --align-items: center;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        border-style: solid;
        --border-style: solid;
        border-width: 2px 2px 2px 2px;
        --border-top-width: 2px;
        --border-right-width: 2px;
        --border-bottom-width: 2px;
        --border-left-width: 2px;
        border-color: var(--e-global-color-ca85951);
        --border-color: var(--e-global-color-ca85951);
        --border-radius: 50% 50% 50% 50%;
    }

    .elementor-205843 .elementor-element.elementor-element-1daecca4:not(.elementor-motion-effects-element-type-background),
    .elementor-205843 .elementor-element.elementor-element-1daecca4>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #FFFFFF;
    }

    .elementor-205843 .elementor-element.elementor-element-1daecca4.e-con {
        --flex-grow: 0;
        --flex-shrink: 0;
    }

    .elementor-205843 .elementor-element.elementor-element-7bbdc419 .elementor-icon-wrapper {
        text-align: center;
    }

    .elementor-205843 .elementor-element.elementor-element-7bbdc419 .elementor-icon {
        font-size: 28px;
    }

    .elementor-205843 .elementor-element.elementor-element-7bbdc419 .elementor-icon svg {
        height: 28px;
    }

    .elementor-205843 .elementor-element.elementor-element-6f5fad24.ob-harakiri {
        writing-mode: inherit;
    }

    .elementor-205843 .elementor-element.elementor-element-6f5fad24.ob-harakiri .elementor-heading-title {
        writing-mode: inherit;
    }

    .elementor-205843 .elementor-element.elementor-element-6f5fad24.ob-harakiri div {
        writing-mode: inherit;
    }

    .elementor-205843 .elementor-element.elementor-element-6f5fad24>.elementor-widget-container {
        background-color: #FFFFFF;
        padding: 12px 12px 12px 12px;
        border-style: solid;
        border-width: 1px 1px 1px 1px;
        border-color: #E4E4E4;
        border-radius: 12px 12px 0px 12px;
        box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.13);
    }

    body:not(.rtl) .elementor-205843 .elementor-element.elementor-element-6f5fad24 {
        right: 70px;
    }

    body.rtl .elementor-205843 .elementor-element.elementor-element-6f5fad24 {
        left: 70px;
    }

    .elementor-205843 .elementor-element.elementor-element-6f5fad24 {
        top: 8px;
        text-align: center;
    }

    .elementor-205843 .elementor-element.elementor-element-6f5fad24 .elementor-heading-title {
        font-family: "Roboto", Sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: #606060;
    }

    .elementor-205843 .elementor-element.elementor-element-6f5fad24.ob-harakiri>div,
    .elementor-205843 .elementor-element.elementor-element-6f5fad24.ob-harakiri>h1,
    .elementor-205843 .elementor-element.elementor-element-6f5fad24.ob-harakiri>h2,
    .elementor-205843 .elementor-element.elementor-element-6f5fad24.ob-harakiri>h3,
    .elementor-205843 .elementor-element.elementor-element-6f5fad24.ob-harakiri>h4,
    .elementor-205843 .elementor-element.elementor-element-6f5fad24.ob-harakiri>h5,
    .elementor-205843 .elementor-element.elementor-element-6f5fad24.ob-harakiri>h6,
    .elementor-205843 .elementor-element.elementor-element-6f5fad24.ob-harakiri>p {
        transform: rotate(0deg);
    }

    .elementor-205843 .elementor-element.elementor-element-6f5fad24>div {
        text-indent: 0px;
        mix-blend-mode: inherit;
    }

    .elementor-205843 .elementor-element.elementor-element-679d758 {
        --display: flex;
        --flex-direction: column;
        --container-widget-width: 100%;
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    @media(max-width:767px) {
        .elementor-205843 .elementor-element.elementor-element-679d758 {
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px;
        }
    }

    @media(min-width:768px) {
        .elementor-205843 .elementor-element.elementor-element-57aa8b6f {
            --width: auto;
        }

        .elementor-205843 .elementor-element.elementor-element-6e198ac5 {
            --width: 60px;
        }

        .elementor-205843 .elementor-element.elementor-element-7d20bfa9 {
            --width: auto;
        }

        .elementor-205843 .elementor-element.elementor-element-1daecca4 {
            --width: 60px;
        }
    }

    /* Start custom CSS for heading, class: .elementor-element-343c1844 */

    .elementor-205843 .elementor-element.elementor-element-343c1844 {
        min-width: 170px;
        transform-origin: 100% 100%;
        pointer-events: none;
        /*white-space: nowrap;*/
        /*display: block;*/
    }

    /* End custom CSS */

    /* Start custom CSS for container, class: .elementor-element-6e198ac5 */

    .elementor-205843 .elementor-element.elementor-element-6e198ac5 {
        min-width: 60px;
        max-height: 60px;
        max-width: 60px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .2), 0 17px 24px rgba(0, 0, 0, .16);
        cursor: pointer;
    }

    .elementor-205843 .elementor-element.elementor-element-6e198ac5:hover {
        transform: scale(1.07);
    }

    /* End custom CSS */

    /* Start custom CSS for heading, class: .elementor-element-6f5fad24 */

    .elementor-205843 .elementor-element.elementor-element-6f5fad24 {
        min-width: 170px;
        transform-origin: 100% 100%;
        pointer-events: none;
        /*white-space: nowrap;*/
        /*display: block;*/
    }

    /* End custom CSS */

    /* Start custom CSS for container, class: .elementor-element-1daecca4 */

    .elementor-205843 .elementor-element.elementor-element-1daecca4 {
        min-width: 60px;
        max-height: 60px;
        max-width: 60px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .2), 0 17px 24px rgba(0, 0, 0, .16);
        cursor: pointer;
    }

    .elementor-205843 .elementor-element.elementor-element-1daecca4:hover {
        transform: scale(1.07);
    }

    /* End custom CSS */

    /*# sourceURL=elementor-frontend-inline-css */
</style>


<style id='learndash-front-inline-css'>
    .learndash-wrapper #quiz_continue_link,
    .learndash-wrapper .ld-secondary-background,
    .learndash-wrapper .learndash_mark_complete_button:not(.ld--ignore-inline-css),
    .learndash-wrapper #learndash_mark_complete_button,
    .learndash-wrapper .ld-status-complete,
    .learndash-wrapper .ld-alert-success .ld-button,
    .learndash-wrapper .ld-alert-success .ld-alert-icon {
        background-color: #ea4f8b !important;
    }

    .learndash-wrapper #quiz_continue_link:focus,
    .learndash-wrapper .learndash_mark_complete_button:focus:not(.ld--ignore-inline-css),
    .learndash-wrapper #learndash_mark_complete_button:focus,
    .learndash-wrapper .ld-alert-success .ld-button:focus {
        outline-color: #ea4f8b;
    }

    .learndash-wrapper .wpProQuiz_content a#quiz_continue_link {
        background-color: #ea4f8b !important;
    }

    .learndash-wrapper .wpProQuiz_content a#quiz_continue_link:focus {
        outline-color: #ea4f8b;
    }

    .learndash-wrapper .course_progress .sending_progress_bar {
        background: #ea4f8b !important;
    }

    .learndash-wrapper .wpProQuiz_content .wpProQuiz_button_reShowQuestion:hover,
    .learndash-wrapper .wpProQuiz_content .wpProQuiz_button_restartQuiz:hover {
        background-color: #ea4f8b !important;
        opacity: 0.75;
    }

    .learndash-wrapper .wpProQuiz_content .wpProQuiz_button_reShowQuestion:focus,
    .learndash-wrapper .wpProQuiz_content .wpProQuiz_button_restartQuiz:focus {
        outline-color: #ea4f8b;
    }

    .learndash-wrapper .ld-secondary-color-hover:hover,
    .learndash-wrapper .ld-secondary-color,
    .learndash-wrapper .ld-focus .ld-focus-header .sfwd-mark-complete .learndash_mark_complete_button:not(.ld--ignore-inline-css),
    .learndash-wrapper .ld-focus .ld-focus-header #sfwd-mark-complete #learndash_mark_complete_button,
    .learndash-wrapper .ld-focus .ld-focus-header .sfwd-mark-complete:after {
        color: #ea4f8b !important;
    }

    .learndash-wrapper .ld-secondary-in-progress-icon {
        border-left-color: #ea4f8b !important;
        border-top-color: #ea4f8b !important;
    }

    .learndash-wrapper .ld-alert-success {
        border-color: #ea4f8b;
        background-color: transparent !important;
        color: #ea4f8b;
    }

    .learndash-wrapper .ld-focus .ld-focus-main .ld-focus-content {
        max-width: inherit;
    }

    /*# sourceURL=learndash-front-inline-css */
</style>

<?php include '../partials/nav.php'; ?>

<main class="site-main post-246 page type-page status-publish has-post-thumbnail hentry" role="main">


    <div class="page-content">
        <div data-elementor-type="wp-page" data-elementor-id="246" class="elementor elementor-246"
            data-elementor-post-type="page">
            <div class="elementor-element elementor-element-945c4c2 e-con-full e-flex e-con e-parent" data-id="945c4c2"
                data-element_type="container" data-e-type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;jet_parallax_layout_list&quot;:[],&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                <div class="elementor-element elementor-element-f9a2b16 e-con-full e-flex e-con e-child"
                    data-id="f9a2b16" data-element_type="container" data-e-type="container"
                    data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    <div data-dce-background-color="#1CD9AD8F"
                        class="elementor-element elementor-element-166200f e-con-full e-transform e-flex e-con e-child"
                        data-id="166200f" data-element_type="container" data-e-type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;absolute&quot;,&quot;jet_parallax_layout_list&quot;:[],&quot;_transform_translateX_effect&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-70,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_tablet&quot;:{&quot;unit&quot;:&quot;vw&quot;,&quot;size&quot;:-20,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-30,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-84,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    </div>
                    <div data-dce-background-color="#1CD9AD8F"
                        class="elementor-element elementor-element-e721ce1 e-con-full e-transform e-flex e-con e-child"
                        data-id="e721ce1" data-element_type="container" data-e-type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;absolute&quot;,&quot;jet_parallax_layout_list&quot;:[],&quot;_transform_translateX_effect&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-53,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-39,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-30,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-63,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-16,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    </div>
                    <div data-dce-background-color="#44A9CF"
                        class="elementor-element elementor-element-7a0a531 e-con-full e-transform e-flex e-con e-child"
                        data-id="7a0a531" data-element_type="container" data-e-type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;absolute&quot;,&quot;jet_parallax_layout_list&quot;:[],&quot;_transform_translateX_effect&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_tablet&quot;:{&quot;unit&quot;:&quot;vw&quot;,&quot;size&quot;:2,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-55,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-67,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-52,&quot;sizes&quot;:[]},&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    </div>
                    <div data-dce-title-color="#16CEA3"
                        class="elementor-element elementor-element-6d9a57e elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-heading"
                        data-id="6d9a57e" data-element_type="widget" data-e-type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:0,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-heading-title elementor-size-default">About</div>
                        </div>
                    </div>
                    <div data-dce-title-color="#133B49"
                        class="elementor-element elementor-element-eb672df elementor-widget-mobile__width-initial elementor-widget__width-initial elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-heading"
                        data-id="eb672df" data-element_type="widget" data-e-type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h1 class="elementor-heading-title elementor-size-default">Because Book Publishing Should Be
                                Built Around the Author</h1>
                        </div>
                    </div>
                    <div data-dce-title-color="#38485C"
                        class="elementor-element elementor-element-3611ed6 elementor-widget__width-initial ob-harakiri-inherit elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-heading"
                        data-id="3611ed6" data-element_type="widget" data-e-type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:400,&quot;_ob_use_harakiri&quot;:&quot;yes&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_harakiri_text_clip&quot;:&quot;none&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">At Spines, our mission is to make
                                professional publishing accessible to everyone, so no great story goes unheard. We
                                combine expert care, smart technology, and a seamless experience to empower authors,
                                amplify their voices,
                                and honor the craft.</h2>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-b0be6ed elementor-pagination-position-inside elementor-widget__width-initial elementor-arrows-position-inside elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-image-carousel"
                    data-id="b0be6ed" data-element_type="widget" data-e-type="widget"
                    data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;autoplay_speed&quot;:3000,&quot;effect&quot;:&quot;fade&quot;,&quot;speed&quot;:1500,&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:500,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                    data-widget_type="image-carousel.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-image-carousel-wrapper swiper" role="region"
                            aria-roledescription="carousel" aria-label="Image Carousel" dir="ltr">
                            <div class="elementor-image-carousel swiper-wrapper swiper-image-stretch" aria-live="off">
                                <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="1 of 1">
                                    <figure class="swiper-slide-inner"><img width="1400" height="634" decoding="async"
                                            class="swiper-slide-image"
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201400%20634'%3E%3C/svg%3E"
                                            alt="header-about-us-3.jpg"
                                            data-lazy-src="https://cdn.spines.com/wp-content/uploads/2025/09/header-about-us-3.jpg" /><noscript><img
                                                width="1400" height="634" decoding="async" class="swiper-slide-image"
                                                src="https://cdn.spines.com/wp-content/uploads/2025/09/header-about-us-3.jpg"
                                                alt="header-about-us-3.jpg" /></noscript></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-356297b e-flex e-con-boxed e-con e-parent" data-id="356297b"
                data-element_type="container" data-e-type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;jet_parallax_layout_list&quot;:[],&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-308b1ab e-con-full e-flex e-con e-child"
                        data-id="308b1ab" data-element_type="container" data-e-type="container"
                        data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div data-dce-title-color="#133B49"
                            class="elementor-element elementor-element-0e47241 elementor-widget-mobile__width-initial elementor-widget__width-initial elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-heading"
                            data-id="0e47241" data-element_type="widget" data-e-type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">What book publishing should
                                    be</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-4da8cee e-con-full e-flex e-con e-child"
                            data-id="4da8cee" data-element_type="container" data-e-type="container"
                            data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                            <div class="elementor-element elementor-element-e37f934 elementor-view-default elementor-mobile-position-block-start elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-icon-box"
                                data-id="e37f934" data-element_type="widget" data-e-type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                                data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">

                                        <div class="elementor-icon-box-icon">
                                            <span class="elementor-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                                                    viewBox="0 0 64 64" fill="none">
                                                    <path
                                                        d="M42.6667 48C44.0812 48 45.4377 48.5619 46.4379 49.5621C47.4381 50.5623 48 51.9189 48 53.3334C48 51.9189 48.5619 50.5623 49.5621 49.5621C50.5623 48.5619 51.9188 48 53.3333 48C51.9188 48 50.5623 47.4381 49.5621 46.4379C48.5619 45.4377 48 44.0812 48 42.6667C48 44.0812 47.4381 45.4377 46.4379 46.4379C45.4377 47.4381 44.0812 48 42.6667 48ZM42.6667 16C44.0812 16 45.4377 16.5619 46.4379 17.5621C47.4381 18.5623 48 19.9189 48 21.3334C48 19.9189 48.5619 18.5623 49.5621 17.5621C50.5623 16.5619 51.9188 16 53.3333 16C51.9188 16 50.5623 15.4381 49.5621 14.4379C48.5619 13.4377 48 12.0812 48 10.6667C48 12.0812 47.4381 13.4377 46.4379 14.4379C45.4377 15.4381 44.0812 16 42.6667 16ZM24 48C24 43.7566 25.6857 39.6869 28.6863 36.6863C31.6869 33.6857 35.7565 32 40 32C35.7565 32 31.6869 30.3143 28.6863 27.3137C25.6857 24.3131 24 20.2435 24 16C24 20.2435 22.3143 24.3131 19.3137 27.3137C16.3131 30.3143 12.2435 32 8 32C12.2435 32 16.3131 33.6857 19.3137 36.6863C22.3143 39.6869 24 43.7566 24 48Z"
                                                        stroke="url(#paint0_linear_13270_4293)" stroke-width="4"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <defs>
                                                        <linearGradient id="paint0_linear_13270_4293" x1="-11.5"
                                                            y1="26.0007" x2="70" y2="57.0007"
                                                            gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#44AACF"></stop>
                                                            <stop offset="1" stop-color="#A44BF7"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                </svg> </span>
                                        </div>

                                        <div class="elementor-icon-box-content">

                                            <h3 class="elementor-icon-box-title">
                                                <span>
                                                    Designed for Authors Who Want More </span>
                                            </h3>

                                            <p class="elementor-icon-box-description">
                                                Spines is a publishing platform created for authors who want more: More
                                                quality. More control. More reach. With Spines, you retain full
                                                ownership of your copyrights while accessing the tools and expertise to
                                                bring your vision to life with professionalism
                                                and precision. </p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-cc0172c elementor-view-default elementor-mobile-position-block-start elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-icon-box"
                                data-id="cc0172c" data-element_type="widget" data-e-type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                                data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">

                                        <div class="elementor-icon-box-icon">
                                            <span class="elementor-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                                                    viewBox="0 0 64 64" fill="none">
                                                    <path
                                                        d="M32 32H24C19.7565 32 15.6869 30.3143 12.6863 27.3137C9.68571 24.3131 8 20.2435 8 16V10.6667H16C20.2435 10.6667 24.3131 12.3524 27.3137 15.353C30.3143 18.3536 32 22.4232 32 26.6667V53.3334M32 37.3334C32 33.0899 33.6857 29.0202 36.6863 26.0196C39.6869 23.0191 43.7565 21.3334 48 21.3334H56V24C56 28.2435 54.3143 32.3131 51.3137 35.3137C48.3131 38.3143 44.2435 40 40 40H32"
                                                        stroke="url(#paint0_linear_13270_4301)" stroke-width="4"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <defs>
                                                        <linearGradient id="paint0_linear_13270_4301" x1="-12.6471"
                                                            y1="26.0007" x2="72.3461" y2="60.231"
                                                            gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#44AACF"></stop>
                                                            <stop offset="1" stop-color="#A44BF7"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                </svg> </span>
                                        </div>

                                        <div class="elementor-icon-box-content">

                                            <h3 class="elementor-icon-box-title">
                                                <span>
                                                    Everything You Need to Bring Your Book to Life </span>
                                            </h3>

                                            <p class="elementor-icon-box-description">
                                                Our platform combines expert support with purpose-built technology to
                                                deliver professional publishing at scale. Publish in print, ebook, and
                                                audiobook formats with custom design, professional editing,
                                                multi-language translation, and global distribution
                                                to over 100 channels. </p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-2b2efa0 elementor-view-default elementor-mobile-position-block-start elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-icon-box"
                                data-id="2b2efa0" data-element_type="widget" data-e-type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                                data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">

                                        <div class="elementor-icon-box-icon">
                                            <span class="elementor-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                                                    viewBox="0 0 64 64" fill="none">
                                                    <path
                                                        d="M16 56V50.6667C16 47.8377 17.1238 45.1246 19.1242 43.1242C21.1246 41.1238 23.8377 40 26.6667 40H36M21.3333 18.6667C21.3333 21.4956 22.4571 24.2088 24.4575 26.2091C26.4579 28.2095 29.171 29.3333 32 29.3333C34.829 29.3333 37.5421 28.2095 39.5425 26.2091C41.5429 24.2088 42.6667 21.4956 42.6667 18.6667C42.6667 15.8377 41.5429 13.1246 39.5425 11.1242C37.5421 9.12381 34.829 8 32 8C29.171 8 26.4579 9.12381 24.4575 11.1242C22.4571 13.1246 21.3333 15.8377 21.3333 18.6667ZM49.12 41.6273C49.64 41.1072 50.2574 40.6947 50.9369 40.4133C51.6163 40.1318 52.3446 39.987 53.08 39.987C53.8154 39.987 54.5437 40.1318 55.2231 40.4133C55.9026 40.6947 56.52 41.1072 57.04 41.6273C57.56 42.1473 57.9725 42.7647 58.254 43.4441C58.5354 44.1236 58.6803 44.8518 58.6803 45.5873C58.6803 46.3227 58.5354 47.0509 58.254 47.7304C57.9725 48.4099 57.56 49.0272 57.04 49.5473L48 58.6673H40V50.6673L49.12 41.6273Z"
                                                        stroke="url(#paint0_linear_13270_4297)" stroke-width="4"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <defs>
                                                        <linearGradient id="paint0_linear_13270_4297" x1="-2.3588"
                                                            y1="26.2093" x2="78.1514" y2="50.488"
                                                            gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#44AACF"></stop>
                                                            <stop offset="1" stop-color="#A44BF7"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                </svg> </span>
                                        </div>

                                        <div class="elementor-icon-box-content">

                                            <h3 class="elementor-icon-box-title">
                                                <span>
                                                    Effortless Publishing with Expert Guidance </span>
                                            </h3>

                                            <p class="elementor-icon-box-description">
                                                Intelligent workflows power every stage of the process, automating where
                                                it saves time and involving experts where it matters most. The result? A
                                                publishing experience that’s faster, clearer, and built to meet the high
                                                standards you deserve. </p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-dce-background-color="#F8F5F1"
                class="elementor-element elementor-element-6096237 e-flex e-con-boxed e-con e-parent" data-id="6096237"
                data-element_type="container" data-e-type="container"
                data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                <div class="e-con-inner">
                    <div data-dce-title-color="#133B49"
                        class="elementor-element elementor-element-933e6e0 elementor-widget__width-initial elementor-widget-mobile__width-inherit ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                        data-id="933e6e0" data-element_type="widget" data-e-type="widget"
                        data-settings="{&quot;_ob_use_harakiri&quot;:&quot;yes&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_harakiri_text_clip&quot;:&quot;none&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Spines by the numbers</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-b6a6e88 e-con-full e-flex e-con e-child"
                        data-id="b6a6e88" data-element_type="container" data-e-type="container"
                        data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-element elementor-element-8d6a4f5 e-con-full e-flex e-con e-child"
                            data-id="8d6a4f5" data-element_type="container" data-e-type="container"
                            data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                            <div data-dce-title-color="#38485C"
                                class="elementor-element elementor-element-85cd737 ob-has-background-overlay ob-use-counterz elementor-widget elementor-widget-counter"
                                data-id="85cd737" data-element_type="widget" data-e-type="widget"
                                data-settings="{&quot;_ob_use_counterz&quot;:&quot;yes&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                                data-widget_type="counter.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-title">year founded</div>
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="2000"
                                                data-to-value="2021" data-from-value="0">0</span>
                                            <span class="elementor-counter-number-suffix"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-de51d3a e-con-full e-flex e-con e-child"
                            data-id="de51d3a" data-element_type="container" data-e-type="container"
                            data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                            <div data-dce-title-color="#38485C"
                                class="elementor-element elementor-element-c52cff6 ob-has-background-overlay ob-use-counterz elementor-widget elementor-widget-counter"
                                data-id="c52cff6" data-element_type="widget" data-e-type="widget"
                                data-settings="{&quot;_ob_use_counterz&quot;:&quot;yes&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                                data-widget_type="counter.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-title">employees</div>
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="2000"
                                                data-to-value="150" data-from-value="0" data-delimiter=",">0</span>
                                            <span class="elementor-counter-number-suffix">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-1da5af8 e-con-full e-flex e-con e-child"
                            data-id="1da5af8" data-element_type="container" data-e-type="container"
                            data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                            <div data-dce-title-color="#38485C"
                                class="elementor-element elementor-element-9328989 ob-has-background-overlay ob-use-counterz elementor-widget elementor-widget-counter"
                                data-id="9328989" data-element_type="widget" data-e-type="widget"
                                data-settings="{&quot;_ob_use_counterz&quot;:&quot;yes&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                                data-widget_type="counter.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-title">books published</div>
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="2000"
                                                data-to-value="2800" data-from-value="0">0</span>
                                            <span class="elementor-counter-number-suffix">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-ab04ea4 e-con-full e-flex e-con e-child"
                            data-id="ab04ea4" data-element_type="container" data-e-type="container"
                            data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                            <div data-dce-title-color="#38485C"
                                class="elementor-element elementor-element-fe90358 ob-has-background-overlay ob-use-counterz elementor-widget elementor-widget-counter"
                                data-id="fe90358" data-element_type="widget" data-e-type="widget"
                                data-settings="{&quot;_ob_use_counterz&quot;:&quot;yes&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                                data-widget_type="counter.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-title">authors</div>
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="2000"
                                                data-to-value="1800" data-from-value="0">0</span>
                                            <span class="elementor-counter-number-suffix">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-f933fc9 e-con-full e-flex e-con e-parent" data-id="f933fc9"
                data-element_type="container" data-e-type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;jet_parallax_layout_list&quot;:[],&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                <div class="elementor-element elementor-element-c11b72e e-con-full e-flex e-con e-child"
                    data-id="c11b72e" data-element_type="container" data-e-type="container"
                    data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    <div data-dce-background-color="#1CD9AD8A"
                        class="elementor-element elementor-element-1349ee5 e-con-full e-transform e-flex e-con e-child"
                        data-id="1349ee5" data-element_type="container" data-e-type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;absolute&quot;,&quot;jet_parallax_layout_list&quot;:[],&quot;_transform_translateX_effect&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-67,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-53,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-45,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-2,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:77,&quot;sizes&quot;:[]},&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    </div>
                    <div data-dce-title-color="#133B49"
                        class="elementor-element elementor-element-eae23a7 elementor-widget-mobile__width-initial elementor-widget__width-initial elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-heading"
                        data-id="eae23a7" data-element_type="widget" data-e-type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Made by People Who Care</h2>
                        </div>
                    </div>
                    <div data-dce-text-color="#133B49"
                        class="elementor-element elementor-element-d36cae5 elementor-widget__width-initial ob-harakiri-inherit elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-text-editor"
                        data-id="d36cae5" data-element_type="widget" data-e-type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200,&quot;_ob_use_harakiri&quot;:&quot;yes&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_postman_use&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                        data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>We’re a team of editors, designers, engineers, and book lovers who believe great stories
                                deserve to be heard. We approach every project with care, respect, and a shared
                                commitment to quality. Whether we’re refining a manuscript,
                                building the tools that support our authors, or helping a book cross borders and
                                languages, we lead with craft and intention. We’re building more than a platform; we’re
                                raising the standard for how books are published
                                and shared today and in the future.</p>
                        </div>
                    </div>
                    <!-- dce invisible element e17e21b -->
                </div>
            </div>
            <div class="elementor-element elementor-element-6d439b8 e-flex e-con-boxed e-con e-parent" data-id="6d439b8"
                data-element_type="container" data-e-type="container"
                data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                <div class="e-con-inner">
                    <div data-dce-title-color="#133B49"
                        class="elementor-element elementor-element-6e5e8c9 ob-harakiri-inherit elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-heading"
                        data-id="6e5e8c9" data-element_type="widget" data-e-type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_ob_use_harakiri&quot;:&quot;yes&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_harakiri_text_clip&quot;:&quot;none&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Meet the Team</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-4f201a9 elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-shortcode"
                        data-id="4f201a9" data-element_type="widget" data-e-type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:300,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                        data-widget_type="shortcode.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-shortcode">
                                <div class="team">
                                    <div class="item">
                                        <div class="image-link "><img width="600" height="900" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20900'%3E%3C/svg%3E"
                                                alt="Yehuda Niv"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2025/03/Yehuda_Niv_Spines.jpg"><noscript><img
                                                    width="600" height="900" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2025/03/Yehuda_Niv_Spines.jpg"
                                                    alt="Yehuda Niv"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Yehuda Niv</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/yehuda-niv-spines/"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">Founder & CEO @Spines</div>
                                    </div>
                                    <div class="item">
                                        <div class="image-link "><img width="768" height="1152" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%201152'%3E%3C/svg%3E"
                                                alt="Lev David"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2024/04/Lev-David-CO-Founder-CMO-@-Spines-768x1152.jpg"><noscript><img
                                                    width="768" height="1152" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2024/04/Lev-David-CO-Founder-CMO-@-Spines-768x1152.jpg"
                                                    alt="Lev David"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Lev David</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/lev-david-digital-marketing-specialist/"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">CO-Founder & CSO @Spines</div>
                                    </div>
                                    <div class="item">
                                        <div class="image-link "><img width="768" height="1152" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%201152'%3E%3C/svg%3E"
                                                alt="Nir Kenner"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2024/04/Nir-Kenner-CO-Founder-CTO-@-Spines-768x1152.jpg"><noscript><img
                                                    width="768" height="1152" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2024/04/Nir-Kenner-CO-Founder-CTO-@-Spines-768x1152.jpg"
                                                    alt="Nir Kenner"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Nir Kenner</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/nir-kenner-563b41119/"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">CO-Founder & CTO @Spines</div>
                                    </div>
                                    <div class="item">
                                        <div class="image-link "><img width="768" height="1152" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%201152'%3E%3C/svg%3E"
                                                alt="Niv Ovdat"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2024/04/Niv-Ovdat-CO-Founder-COO-@-Spines-768x1152.jpg"><noscript><img
                                                    width="768" height="1152" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2024/04/Niv-Ovdat-CO-Founder-COO-@-Spines-768x1152.jpg"
                                                    alt="Niv Ovdat"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Niv Ovdat</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/niv-ovdat/"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">CO-Founder & CPO @Spines</div>
                                    </div>
                                    <div class="item">
                                        <div class="image-link "><img width="768" height="1185" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%201185'%3E%3C/svg%3E"
                                                alt="Nir Ido"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2025/09/Nir-Ido5-768x1185.jpg"><noscript><img
                                                    width="768" height="1185" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2025/09/Nir-Ido5-768x1185.jpg"
                                                    alt="Nir Ido"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Nir Ido</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/nir-ido-238326a9/"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">COO @Spines</div>
                                    </div>
                                    <div class="item">
                                        <div class="image-link "><img width="768" height="1033" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%201033'%3E%3C/svg%3E"
                                                alt="Gal Ben-Dov"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2024/02/Gal-scaled-e1708607619314-768x1033.jpg"><noscript><img
                                                    width="768" height="1033" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2024/02/Gal-scaled-e1708607619314-768x1033.jpg"
                                                    alt="Gal Ben-Dov"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Gal Ben-Dov</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/gal-ben-dov-ab8a991a8/"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">Head of Operations @Spines</div>
                                    </div>
                                    <div class="item">
                                        <div class="image-link "><img width="768" height="1293" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%201293'%3E%3C/svg%3E"
                                                alt="Dana Legziel"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2025/09/Dana-Legziel1-768x1293.jpg"><noscript><img
                                                    width="768" height="1293" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2025/09/Dana-Legziel1-768x1293.jpg"
                                                    alt="Dana Legziel"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Dana Legziel</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/dana-legziel/"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">Head of Product @Spines</div>
                                    </div>
                                    <div class="item">
                                        <div class="image-link "><img width="768" height="775" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%20775'%3E%3C/svg%3E"
                                                alt="Guy Hamisha"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2024/11/guy1-e1756902491408-768x775.jpeg"><noscript><img
                                                    width="768" height="775" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2024/11/guy1-e1756902491408-768x775.jpeg"
                                                    alt="Guy Hamisha"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Guy Hamisha</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/guy-hamisha-2a264318b/"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">Assistant Controler @Spines</div>
                                    </div>
                                    <div class="item">
                                        <div class="image-link "><img width="768" height="919" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%20919'%3E%3C/svg%3E"
                                                alt="Dara Sternberg"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2025/03/dara-sternberg-scaled-e1756900158784-768x919.jpg"><noscript><img
                                                    width="768" height="919" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2025/03/dara-sternberg-scaled-e1756900158784-768x919.jpg"
                                                    alt="Dara Sternberg"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Dara Sternberg</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/dara-sternberg/"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">Business Operations Manager @Spines</div>
                                    </div>
                                    <div class="item">
                                        <div class="image-link "><img width="768" height="934" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%20934'%3E%3C/svg%3E"
                                                alt="Elizabeth Cipule"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2025/09/elizabeth-e1756899737921-768x934.jpg"><noscript><img
                                                    width="768" height="934" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2025/09/elizabeth-e1756899737921-768x934.jpg"
                                                    alt="Elizabeth Cipule"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Elizabeth Cipule</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/elizabete-cipule-52947b20b/"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">Support Director @Spines</div>
                                    </div>
                                    <div class="item">
                                        <div class="image-link "><img width="674" height="749" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20674%20749'%3E%3C/svg%3E"
                                                alt="Sandra Grosberg"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2025/09/sandra-2-e17569019179711.jpg"><noscript><img
                                                    width="674" height="749" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2025/09/sandra-2-e17569019179711.jpg"
                                                    alt="Sandra Grosberg"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Sandra Grosberg</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/sandra-grosberga-16b307135/"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">Production Director @Spines</div>
                                    </div>
                                    <div class="item">
                                        <div class="image-link "><img width="768" height="777" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%20777'%3E%3C/svg%3E"
                                                alt="Ido Shazkin"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2025/03/ido-shazkin-scaled-e1756902583963-768x777.jpg"><noscript><img
                                                    width="768" height="777" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2025/03/ido-shazkin-scaled-e1756902583963-768x777.jpg"
                                                    alt="Ido Shazkin"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Ido Shazkin</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/ido-shazkin-09092091/"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">Organic Growth & Marketing Automations @Spines</div>
                                    </div>
                                    <div class="item">
                                        <div class="image-link "><img width="768" height="1377" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%201377'%3E%3C/svg%3E"
                                                alt="Tal Falach"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2025/09/Tal-Falach-11-768x1377.jpg"><noscript><img
                                                    width="768" height="1377" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2025/09/Tal-Falach-11-768x1377.jpg"
                                                    alt="Tal Falach"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Tal Falach</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/tal-falach-85a080ba/"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">Content Marketing Lead @Spines</div>
                                    </div>
                                    <div class="item">
                                        <div class="image-link "><img width="768" height="1367" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%201367'%3E%3C/svg%3E"
                                                alt="Oleg Korol"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2025/09/Oleg-Korol1-768x1367.jpg"><noscript><img
                                                    width="768" height="1367" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2025/09/Oleg-Korol1-768x1367.jpg"
                                                    alt="Oleg Korol"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Oleg Korol</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/oleg-korol-02831b21/"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">Head of R&D @Spines</div>
                                    </div>
                                    <div class="item">
                                        <div class="image-link "><img width="768" height="1021" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%201021'%3E%3C/svg%3E"
                                                alt="Leigh Shervy"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2025/09/Leigh-Shervy1-e1756900351923-768x1021.jpg"><noscript><img
                                                    width="768" height="1021" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2025/09/Leigh-Shervy1-e1756900351923-768x1021.jpg"
                                                    alt="Leigh Shervy"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Leigh Shervy</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/leigh-shervy-621806277/"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">Onboarding Team Lead @Spines</div>
                                    </div>
                                    <div class="item">
                                        <div class="image-link "><img width="768" height="987" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%20987'%3E%3C/svg%3E"
                                                alt="Carlos Nielsen"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2025/09/carlos-768x987.jpg"><noscript><img
                                                    width="768" height="987" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2025/09/carlos-768x987.jpg"
                                                    alt="Carlos Nielsen"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Carlos Nielsen</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/carlos-esteban-nielsen/"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">Sales Director @Spines</div>
                                    </div>
                                    <div class="item">
                                        <div class="image-link "><img width="768" height="789" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%20789'%3E%3C/svg%3E"
                                                alt="Guada Garcete"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2025/09/guada-1-3-768x789.jpg"><noscript><img
                                                    width="768" height="789" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2025/09/guada-1-3-768x789.jpg"
                                                    alt="Guada Garcete"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Guada Garcete</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/garceteguadalupe/"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">Publishing Expert @Spines</div>
                                    </div>
                                    <div class="item">
                                        <div class="image-link "><img width="768" height="767" decoding="async"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%20767'%3E%3C/svg%3E"
                                                alt="Roy Rubanenko"
                                                data-lazy-src="https://cdn.spines.com/wp-content/uploads/2025/09/Roy-Rubanenko-croped2-768x767.jpg"><noscript><img
                                                    width="768" height="767" decoding="async"
                                                    src="https://cdn.spines.com/wp-content/uploads/2025/09/Roy-Rubanenko-croped2-768x767.jpg"
                                                    alt="Roy Rubanenko"></noscript></div>
                                        <div class="name-and-icons">
                                            <div class="col">
                                                <div class="name">Roy Rubanenko</div>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.linkedin.com/in/roy-rubanenko-9368491a9"
                                                    class="icon icon-linkedin" title="LinkedIn" target="_blank"
                                                    rel="noopener"></a>
                                            </div>
                                        </div>
                                        <div class="position">Client Marketing Success Manager</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="elementor-element elementor-element-28ac2d5 e-flex e-con-boxed e-con e-parent" data-id="28ac2d5"
                data-element_type="container" data-e-type="container"
                data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                <div class="e-con-inner">
                    <div data-dce-title-color="#133B49"
                        class="elementor-element elementor-element-805e60c elementor-widget__width-initial ob-harakiri-inherit elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-heading"
                        data-id="805e60c" data-element_type="widget" data-e-type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_ob_use_harakiri&quot;:&quot;yes&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_harakiri_text_clip&quot;:&quot;none&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Our culture and values</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-6c212d8 e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="6c212d8" data-element_type="container" data-e-type="container"
                        data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:300,&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-element elementor-element-375131b elementor-flip-box--effect-fade elementor-widget__width-initial ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                            data-id="375131b" data-element_type="widget" data-e-type="widget"
                            data-settings="{&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                            data-widget_type="flip-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-flip-box" tabindex="0">
                                    <div class="elementor-flip-box__layer elementor-flip-box__front">
                                        <div class="elementor-flip-box__layer__overlay">
                                            <div class="elementor-flip-box__layer__inner">

                                                <h4 class="elementor-flip-box__layer__title">
                                                    Books Are Our Legacy </h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-flip-box__layer elementor-flip-box__back">
                                        <div class="elementor-flip-box__layer__overlay">
                                            <div class="elementor-flip-box__layer__inner">

                                                <div class="elementor-flip-box__layer__description">
                                                    We believe books are forever. They outlive us, outlast platforms,
                                                    and carry meaning across generations. We publish stories that matter
                                                    to preserve voices that might otherwise be lost. Our mission is to
                                                    make professional publishing accessible to everyone,
                                                    so no great story goes unheard. </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-8dad0ba elementor-flip-box--effect-fade elementor-widget__width-initial ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                            data-id="8dad0ba" data-element_type="widget" data-e-type="widget"
                            data-settings="{&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                            data-widget_type="flip-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-flip-box" tabindex="0">
                                    <div class="elementor-flip-box__layer elementor-flip-box__front">
                                        <div class="elementor-flip-box__layer__overlay">
                                            <div class="elementor-flip-box__layer__inner">

                                                <h4 class="elementor-flip-box__layer__title">
                                                    Access for All </h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-flip-box__layer elementor-flip-box__back">
                                        <div class="elementor-flip-box__layer__overlay">
                                            <div class="elementor-flip-box__layer__inner">

                                                <div class="elementor-flip-box__layer__description">
                                                    Publishing should be for everyone. We’re opening the gates that
                                                    traditional publishing closed, offering every writer the tools,
                                                    support, and freedom to bring their story to life. No format,
                                                    language, or budget should stand in the way. </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-0e33276 elementor-flip-box--effect-fade elementor-widget__width-initial ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                            data-id="0e33276" data-element_type="widget" data-e-type="widget"
                            data-settings="{&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                            data-widget_type="flip-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-flip-box" tabindex="0">
                                    <div class="elementor-flip-box__layer elementor-flip-box__front">
                                        <div class="elementor-flip-box__layer__overlay">
                                            <div class="elementor-flip-box__layer__inner">

                                                <h4 class="elementor-flip-box__layer__title">
                                                    Craft + Care </h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-flip-box__layer elementor-flip-box__back">
                                        <div class="elementor-flip-box__layer__overlay">
                                            <div class="elementor-flip-box__layer__inner">

                                                <div class="elementor-flip-box__layer__description">
                                                    Details matter—because your book matters. We combine artistic care
                                                    with technological excellence to deliver books that authors are
                                                    proud of and readers cherish. Quality isn’t optional; it’s the
                                                    standard. </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-66c9b1c elementor-flip-box--effect-fade elementor-widget__width-initial ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                            data-id="66c9b1c" data-element_type="widget" data-e-type="widget"
                            data-settings="{&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                            data-widget_type="flip-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-flip-box" tabindex="0">
                                    <div class="elementor-flip-box__layer elementor-flip-box__front">
                                        <div class="elementor-flip-box__layer__overlay">
                                            <div class="elementor-flip-box__layer__inner">

                                                <h4 class="elementor-flip-box__layer__title">
                                                    Clarity </h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-flip-box__layer elementor-flip-box__back">
                                        <div class="elementor-flip-box__layer__overlay">
                                            <div class="elementor-flip-box__layer__inner">

                                                <div class="elementor-flip-box__layer__description">
                                                    We tell it like it is. Publishing can be confusing and full of smoke
                                                    and mirrors. We believe in giving authors real insight, fair terms,
                                                    and a clear path forward because trust is the foundation of every
                                                    great story. </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-9b7739e elementor-flip-box--effect-fade elementor-widget__width-initial ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                            data-id="9b7739e" data-element_type="widget" data-e-type="widget"
                            data-settings="{&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                            data-widget_type="flip-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-flip-box" tabindex="0">
                                    <div class="elementor-flip-box__layer elementor-flip-box__front">
                                        <div class="elementor-flip-box__layer__overlay">
                                            <div class="elementor-flip-box__layer__inner">

                                                <h4 class="elementor-flip-box__layer__title">
                                                    Innovation with Purpose </h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-flip-box__layer elementor-flip-box__back">
                                        <div class="elementor-flip-box__layer__overlay">
                                            <div class="elementor-flip-box__layer__inner">

                                                <div class="elementor-flip-box__layer__description">
                                                    We’re building the future of publishing. Our technology isn’t just
                                                    smart, it’s human-centered. We use AI to empower authors, not
                                                    replace them. Innovation means rethinking what’s possible so more
                                                    voices can be heard. </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7aff230 elementor-flip-box--effect-fade elementor-widget__width-initial ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                            data-id="7aff230" data-element_type="widget" data-e-type="widget"
                            data-settings="{&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                            data-widget_type="flip-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-flip-box" tabindex="0">
                                    <div class="elementor-flip-box__layer elementor-flip-box__front">
                                        <div class="elementor-flip-box__layer__overlay">
                                            <div class="elementor-flip-box__layer__inner">

                                                <h4 class="elementor-flip-box__layer__title">
                                                    The Author Comes First </h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-flip-box__layer elementor-flip-box__back">
                                        <div class="elementor-flip-box__layer__overlay">
                                            <div class="elementor-flip-box__layer__inner">

                                                <div class="elementor-flip-box__layer__description">
                                                    We’re in this with you. Spines isn’t just a platform. We’re a
                                                    partner who believes in your book and helps you make it the best it
                                                    can be. </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div data-dce-background-color="#F6F7F9"
                class="elementor-element elementor-element-6570d12 e-con-full e-flex e-con e-parent" data-id="6570d12"
                data-element_type="container" data-e-type="container"
                data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_use_container_extras&quot;:&quot;no&quot;,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                <div data-dce-title-color="#16CEA3"
                    class="elementor-element elementor-element-f4484a5 elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-heading"
                    data-id="f4484a5" data-element_type="widget" data-e-type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-heading-title elementor-size-default">Careers</div>
                    </div>
                </div>
                <div data-dce-title-color="#133B49"
                    class="elementor-element elementor-element-2362eb6 elementor-widget__width-initial elementor-widget-mobile__width-initial ob-harakiri-inherit elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-heading"
                    data-id="2362eb6" data-element_type="widget" data-e-type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200,&quot;_ob_use_harakiri&quot;:&quot;yes&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_harakiri_text_clip&quot;:&quot;none&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Ready to write the next chapter of
                            your career?</h2>
                    </div>
                </div>
                <div data-dce-title-color="#4C617B"
                    class="elementor-element elementor-element-ad6416f elementor-widget__width-initial ob-harakiri-inherit elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-heading"
                    data-id="ad6416f" data-element_type="widget" data-e-type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:400,&quot;_ob_use_harakiri&quot;:&quot;yes&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_harakiri_text_clip&quot;:&quot;none&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-heading-title elementor-size-default">We're always on the lookout for
                            passionate, driven individuals to join our team. If you're ready to grow your career, make
                            an impact, and collaborate with a dynamic group of professionals, explore our open positions
                            and discover
                            how you can be part of our journey.</div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-c90bb28 ob-has-background-overlay elementor-widget elementor-widget-button"
                    data-id="c90bb28" data-element_type="widget" data-e-type="widget"
                    data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;}"
                    data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm" href="/career/">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-right"
                                            viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                            </path>
                                        </svg> </span>
                                    <span class="elementor-button-text">Join Us</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="post-tags">
        </div>
    </div>

</main>

<?php include '../partials/footer.php'; ?>