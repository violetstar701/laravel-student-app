@section('namediv')
  <div class="inline-flex items-center px-4" style="flex:1">
    <div class="border p-2 px-6 rounded" style="width: 100%; text-align:center; font-weight: bold; border-color: black; background-color: lightgrey">{{ "Name ".$student->name }}</div>
  </div>
@endsection

<x-app-layout>
  <div style="margin: 10px; background-color: white; padding: 20px;">
      <div style="display: flex">
        <div style="flex:3; padding-right: 20px; border-right: 1px solid; ">
          <div style="display:flex">
            <div style="flex: 2">
              <div class="mt-4">
                <x-input-label for="name" :value="__('Full name:')" />
                <x-text-input class="block mt-1 w-full" type="text" name="name" disabled :value="$student->name"/>
              </div>
              <div class="mt-4">
                <x-input-label for="contact" :value="__('Parent/Guardian contact information:')" />
                <x-text-input class="block mt-1 w-full" type="text" name="contact" disabled :value="$student->contact"/>
              </div>
              <div class="mt-4">
                <x-input-label for="subjects" :value="__('Subject choices:')" />
                <x-text-input class="block mt-1 w-full" type="text" name="subjects" disabled :value="$student->subjects"/>
              </div>
            </div>
      
            <div style="padding-left: 20px; flex: 1">
              <img alt="Image(option)" style="border: 1px solid; width: 100%; height: 100%; background-color: lightgrey" />
            </div>
          </div>

          <div class="mt-4">
            <x-input-label for="academics" :value="__('Academics(grades and predicted %):')" />
            <textarea class="block mt-1 w-full" name="academics" disabled>{{ $student->academics }}</textarea>
          </div>

          <div class="mt-4">
            <x-input-label for="extras" :value="__('Extra-curriculars/workshops/internships:')" />
            <textarea class="block mt-1 w-full" name="extras" disabled> {{ $student->extras }} </textarea>
          </div>

          <div class="mt-4">
            <x-input-label for="notes" :value="__('Other/notes:')" />
            <textarea class="block mt-1 w-full" name="notes">{{ $student->notes }}</textarea>
          </div>
        </div>
        <div style="flex: 1; padding-left: 20px;">
          @foreach ($sections as $item)
            <div style="background-color: grey; text-align: center; font-size: 36px; padding: 10px 0px; margin: 10px 0px;">{{ $item->name }}</div>
          @endforeach
        </div>
      </div>
    
  </div>
</x-app-layout>