<x-form-group error="{{ $errors->first($id ?? $name) }}" persistent>
  <m-text-field label='{{ $label }}' type="{{ $type ?? 'text' }}" name='{{ $name }}' value='{{ old($id ?? $name, $value ?? null) }}'></m-text-field>
</x-form-group>
