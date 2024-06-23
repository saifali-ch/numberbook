<x-layouts.app>
  <x-slot name="title">
    {{ $title }}
  </x-slot>

  <x-slot name="description">
    {{ $description }}
  </x-slot>

  <section class="bg-white p-10 pt-0" itemscope itemtype="https://schema.org/QAPage">
    <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question" class="max-w-4xl mx-auto">
      <h1 itemprop="name" class="text-2xl font-bold text-red-600 lg:text-3xl mb-10">
        {{ $title }}
      </h1>

      <div><span itemprop="answerCount" class="hidden">1</span></div>
      <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" class="prose max-w-full">
        <div itemprop="text">
          {!! $description !!}
        </div>
      </div>
    </div>
  </section>
</x-layouts.app>
