# Form Components

A PHP library for managing and rendering form components.

## Installation

Install the package using Composer:

```bash
composer require dragan/form-components
```

## Features
- Easy-to-use form components for Laravel applications.
- Supports various form fields such as text, email, password, textarea, select, checkbox, radio, and file input.
- Automatic handling of old input values.
- Supports form model binding.
- Customizable attributes for each form field.

## Usage
### Form opening and closing

The `form::open` component is used to create a form. It accepts various attributes such as `method`, `action`, and `enctype`.
```bladehtml
<x-form::open method="POST" action="/submit">
    <x-form::text name="name" label="Name" required />
    <x-form::email name="email" label="Email" type="email" required />
    <x-form::textarea name="message" label="Message" required />
    
    <x-form::input name="submit" type="submit" value="Submit" />
</x-form::open>
```

#### Form model

The `form::model` component can also be used with a model. This allows you to bind the form fields to the model's attributes. You can provide array, object, or collection data to the form.
```bladehtml
<x-form::model method="POST" action="/submit" :model="$user">
    <x-form::text name="name" label="Name" required />
    <x-form::email name="email" label="Email" type="email" required />
    <x-form::textarea name="message" label="Message" required />
    
    <x-form::input name="submit" type="submit" value="Submit" />
</x-form::model>
```

### Form fields
The library provides various form fields such as text, email, password, textarea, select, checkbox, radio, and file input. Each field can be customized with attributes like `name`, `label`, `value`, `placeholder`, and more.

#### Text input
```bladehtml
<x-form::text name="username" label="Username" placeholder="Enter your username" required />
```

#### Email input
```bladehtml
<x-form::email name="email" label="Email" placeholder="Enter your email" required />
```
#### Password input
```bladehtml
<x-form::password name="password" label="Password" placeholder="Enter your password" required />
```
#### Textarea
```bladehtml
<x-form::textarea name="message" label="Message" placeholder="Enter your message" required />
```
#### Select
```bladehtml
<x-form::select name="country" label="Country" :options="$countries" required />
```
#### Checkbox
```bladehtml
<x-form::checkbox name="terms" label="I agree to the terms and conditions" required />
```

### Old input values
The library automatically handles old input values. If the form is submitted and validation fails, the old input values will be repopulated in the form fields. This is done using the `old()` helper function in Laravel.

## Contributing
If you would like to contribute to this library, please fork the repository and submit a pull request. We welcome contributions of all kinds, including bug fixes, new features, and documentation improvements.

## License
This library is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.
```
