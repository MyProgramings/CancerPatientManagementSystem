@props(['disabled' => false])
<select {{ $attributes->wire('model') }} {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => 'form-select w-full bg-waite border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop']) }}>
    <optgroup label="gray">
        <option class="bg-gray-50  text-black" value="bg-gray-50  text-black">bg-gray-50 text-black</option>
        <option class="bg-gray-100 text-black" value="bg-gray-100 text-black">bg-gray-100 text-black</option>
        <option class="bg-gray-200 text-black" value="bg-gray-200 text-black">bg-gray-200 text-black</option>
        <option class="bg-gray-300 text-black" value="bg-gray-300 text-black">bg-gray-300 text-black</option>
        <option class="bg-gray-400 text-black" value="bg-gray-400 text-black">bg-gray-400 text-black</option>
        <option class="bg-gray-500 text-white" value="bg-gray-500 text-white">bg-gray-500 text-white</option>
        <option class="bg-gray-600 text-white" value="bg-gray-600 text-white">bg-gray-600 text-white</option>
        <option class="bg-gray-700 text-white" value="bg-gray-700 text-white">bg-gray-700 text-white</option>
        <option class="bg-gray-800 text-white" value="bg-gray-800 text-white">bg-gray-800 text-white</option>
        <option class="bg-gray-900 text-white" value="bg-gray-900 text-white">bg-gray-900 text-white</option>
    </optgroup>
    <optgroup label="red">
        <option class="bg-red-50  text-black" value="bg-red-50  text-black">bg-red-50 text-black</option>
        <option class="bg-red-100 text-black" value="bg-red-100 text-black">bg-red-100 text-black</option>
        <option class="bg-red-200 text-black" value="bg-red-200 text-black">bg-red-200 text-black</option>
        <option class="bg-red-300 text-black" value="bg-red-300 text-black">bg-red-300 text-black</option>
        <option class="bg-red-400 text-black" value="bg-red-400 text-black">bg-red-400 text-black</option>
        <option class="bg-red-500 text-white" value="bg-red-500 text-white">bg-red-500 text-white</option>
        <option class="bg-red-600 text-white" value="bg-red-600 text-white">bg-red-600 text-white</option>
        <option class="bg-red-700 text-white" value="bg-red-700 text-white">bg-red-700 text-white</option>
        <option class="bg-red-800 text-white" value="bg-red-800 text-white">bg-red-800 text-white</option>
        <option class="bg-red-900 text-white" value="bg-red-900 text-white">bg-red-900 text-white</option>
    </optgroup>
    <optgroup label="orange">
        <option class="bg-orange-50  text-black" value="bg-orange-50  text-black">bg-orange-50 text-black</option>
        <option class="bg-orange-100 text-black" value="bg-orange-100 text-black">bg-orange-100 text-black</option>
        <option class="bg-orange-200 text-black" value="bg-orange-200 text-black">bg-orange-200 text-black</option>
        <option class="bg-orange-300 text-black" value="bg-orange-300 text-black">bg-orange-300 text-black</option>
        <option class="bg-orange-400 text-black" value="bg-orange-400 text-black">bg-orange-400 text-black</option>
        <option class="bg-orange-500 text-white" value="bg-orange-500 text-white">bg-orange-500 text-white</option>
        <option class="bg-orange-600 text-white" value="bg-orange-600 text-white">bg-orange-600 text-white</option>
        <option class="bg-orange-700 text-white" value="bg-orange-700 text-white">bg-orange-700 text-white</option>
        <option class="bg-orange-800 text-white" value="bg-orange-800 text-white">bg-orange-800 text-white</option>
        <option class="bg-orange-900 text-white" value="bg-orange-900 text-white">bg-orange-900 text-white</option>
    </optgroup>
    <optgroup label="yellow">
        <option class="bg-yellow-50  text-black" value="bg-yellow-50  text-black">bg-yellow-50 text-black</option>
        <option class="bg-yellow-100 text-black" value="bg-yellow-100 text-black">bg-yellow-100 text-black</option>
        <option class="bg-yellow-200 text-black" value="bg-yellow-200 text-black">bg-yellow-200 text-black</option>
        <option class="bg-yellow-300 text-black" value="bg-yellow-300 text-black">bg-yellow-300 text-black</option>
        <option class="bg-yellow-400 text-black" value="bg-yellow-400 text-black">bg-yellow-400 text-black</option>
        <option class="bg-yellow-500 text-white" value="bg-yellow-500 text-white">bg-yellow-500 text-white</option>
        <option class="bg-yellow-600 text-white" value="bg-yellow-600 text-white">bg-yellow-600 text-white</option>
        <option class="bg-yellow-700 text-white" value="bg-yellow-700 text-white">bg-yellow-700 text-white</option>
        <option class="bg-yellow-800 text-white" value="bg-yellow-800 text-white">bg-yellow-800 text-white</option>
        <option class="bg-yellow-900 text-white" value="bg-yellow-900 text-white">bg-yellow-900 text-white</option>
    </optgroup>
    <optgroup label="green">
        <option class="bg-green-50  text-black" value="bg-green-50  text-black">bg-green-50 text-black</option>
        <option class="bg-green-100 text-black" value="bg-green-100 text-black">bg-green-100 text-black</option>
        <option class="bg-green-200 text-black" value="bg-green-200 text-black">bg-green-200 text-black</option>
        <option class="bg-green-300 text-black" value="bg-green-300 text-black">bg-green-300 text-black</option>
        <option class="bg-green-400 text-black" value="bg-green-400 text-black">bg-green-400 text-black</option>
        <option class="bg-green-500 text-white" value="bg-green-500 text-white">bg-green-500 text-white</option>
        <option class="bg-green-600 text-white" value="bg-green-600 text-white">bg-green-600 text-white</option>
        <option class="bg-green-700 text-white" value="bg-green-700 text-white">bg-green-700 text-white</option>
        <option class="bg-green-800 text-white" value="bg-green-800 text-white">bg-green-800 text-white</option>
        <option class="bg-green-900 text-white" value="bg-green-900 text-white">bg-green-900 text-white</option>
    </optgroup>
    <optgroup label="blue">
        <option class="bg-blue-50  text-black" value="bg-blue-50  text-black">bg-blue-50 text-black</option>
        <option class="bg-blue-100 text-black" value="bg-blue-100 text-black">bg-blue-100 text-black</option>
        <option class="bg-blue-200 text-black" value="bg-blue-200 text-black">bg-blue-200 text-black</option>
        <option class="bg-blue-300 text-black" value="bg-blue-300 text-black">bg-blue-300 text-black</option>
        <option class="bg-blue-400 text-black" value="bg-blue-400 text-black">bg-blue-400 text-black</option>
        <option class="bg-blue-500 text-white" value="bg-blue-500 text-white">bg-blue-500 text-white</option>
        <option class="bg-blue-600 text-white" value="bg-blue-600 text-white">bg-blue-600 text-white</option>
        <option class="bg-blue-700 text-white" value="bg-blue-700 text-white">bg-blue-700 text-white</option>
        <option class="bg-blue-800 text-white" value="bg-blue-800 text-white">bg-blue-800 text-white</option>
        <option class="bg-blue-900 text-white" value="bg-blue-900 text-white">bg-blue-900 text-white</option>
    </optgroup>
    <optgroup label="indigo">
        <option class="bg-indigo-50  text-black" value="bg-indigo-50  text-black">bg-indigo-50 text-black</option>
        <option class="bg-indigo-100 text-black" value="bg-indigo-100 text-black">bg-indigo-100 text-black</option>
        <option class="bg-indigo-200 text-black" value="bg-indigo-200 text-black">bg-indigo-200 text-black</option>
        <option class="bg-indigo-300 text-black" value="bg-indigo-300 text-black">bg-indigo-300 text-black</option>
        <option class="bg-indigo-400 text-black" value="bg-indigo-400 text-black">bg-indigo-400 text-black</option>
        <option class="bg-indigo-500 text-white" value="bg-indigo-500 text-white">bg-indigo-500 text-white</option>
        <option class="bg-indigo-600 text-white" value="bg-indigo-600 text-white">bg-indigo-600 text-white</option>
        <option class="bg-indigo-700 text-white" value="bg-indigo-700 text-white">bg-indigo-700 text-white</option>
        <option class="bg-indigo-800 text-white" value="bg-indigo-800 text-white">bg-indigo-800 text-white</option>
        <option class="bg-indigo-900 text-white" value="bg-indigo-900 text-white">bg-indigo-900 text-white</option>
    </optgroup>
    <optgroup label="purple">
        <option class="bg-purple-50  text-black" value="bg-purple-50  text-black">bg-purple-50 text-black</option>
        <option class="bg-purple-100 text-black" value="bg-purple-100 text-black">bg-purple-100 text-black</option>
        <option class="bg-purple-200 text-black" value="bg-purple-200 text-black">bg-purple-200 text-black</option>
        <option class="bg-purple-300 text-black" value="bg-purple-300 text-black">bg-purple-300 text-black</option>
        <option class="bg-purple-400 text-black" value="bg-purple-400 text-black">bg-purple-400 text-black</option>
        <option class="bg-purple-500 text-white" value="bg-purple-500 text-white">bg-purple-500 text-white</option>
        <option class="bg-purple-600 text-white" value="bg-purple-600 text-white">bg-purple-600 text-white</option>
        <option class="bg-purple-700 text-white" value="bg-purple-700 text-white">bg-purple-700 text-white</option>
        <option class="bg-purple-800 text-white" value="bg-purple-800 text-white">bg-purple-800 text-white</option>
        <option class="bg-purple-900 text-white" value="bg-purple-900 text-white">bg-purple-900 text-white</option>
    </optgroup>
    <optgroup label="pink">
        <option class="bg-pink-50  text-black" value="bg-pink-50  text-black">bg-pink-50 text-black</option>
        <option class="bg-pink-100 text-black" value="bg-pink-100 text-black">bg-pink-100 text-black</option>
        <option class="bg-pink-200 text-black" value="bg-pink-200 text-black">bg-pink-200 text-black</option>
        <option class="bg-pink-300 text-black" value="bg-pink-300 text-black">bg-pink-300 text-black</option>
        <option class="bg-pink-400 text-black" value="bg-pink-400 text-black">bg-pink-400 text-black</option>
        <option class="bg-pink-500 text-white" value="bg-pink-500 text-white">bg-pink-500 text-white</option>
        <option class="bg-pink-600 text-white" value="bg-pink-600 text-white">bg-pink-600 text-white</option>
        <option class="bg-pink-700 text-white" value="bg-pink-700 text-white">bg-pink-700 text-white</option>
        <option class="bg-pink-800 text-white" value="bg-pink-800 text-white">bg-pink-800 text-white</option>
        <option class="bg-pink-900 text-white" value="bg-pink-900 text-white">bg-pink-900 text-white</option>
    </optgroup>
</select>