@extends('site3.master')

@section('title', 'Homepage')

@section('content')
<main>
    <div class="container my-5">
    <h1>Homepage</h1>

    @if ($study_years == 2)
    <p>مبارك عليك الدبلوم اخوي</p>
    @elseif($study_years == 4)
    <p>انت اقسم بالله ما حرا فاهم ليش بتحكي عن حالك مهندس</p>
    @elseif($study_years == 5)
    <p>مبارك عليك الكلمة تتهنى فيها</p>
    @elseif($study_years > 5)
    <p>انت الي فاهم الدنيا صح الصح اخوي</p>
    @else
    <p>انت لسا قيد الدراسة</p>
    @endif

    <ul>
        @foreach ($names as $name)
            <li>{{ $name }}</li>
        @endforeach
    </ul>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, iure velit nam placeat odit doloribus porro ea eveniet quaerat facilis nobis animi facere laudantium reiciendis, recusandae soluta quis debitis architecto incidunt eligendi! Assumenda officia aliquid inventore impedit tenetur! Reiciendis nostrum beatae assumenda nam ratione sit ad dignissimos accusamus mollitia aperiam dolore labore rem quis alias suscipit, repellat, modi unde deserunt. Provident dolores assumenda praesentium ratione ab iste consequatur, doloremque ipsam commodi at magni doloribus temporibus optio ullam quidem maiores libero suscipit harum eos cumque quas! Corporis perferendis magnam incidunt quas libero repellendus quaerat recusandae accusamus dolor eos natus atque, sequi rerum beatae, et doloribus consequatur quisquam nostrum sunt reiciendis labore sit quidem eaque! Natus, sunt? Dolor in expedita voluptate praesentium. Omnis reiciendis eligendi mollitia, maiores quo eum a aperiam at voluptate optio iure minus impedit obcaecati ratione quidem ut nam eos! Iste excepturi, animi similique vero vel soluta recusandae. Voluptas aperiam optio blanditiis saepe maxime officiis deserunt sed, doloremque corporis? Vel, alias non autem magnam maiores quam, aut incidunt consequuntur, cupiditate sequi voluptatem provident placeat. Repellendus, dolore. Eum mollitia ut ipsam quidem optio vero deserunt soluta temporibus illo repudiandae placeat nesciunt repellat saepe maiores nihil, beatae, veritatis repellendus autem minus incidunt. Ad quo nam dignissimos, deleniti, dicta sed magnam tenetur facilis illum aspernatur eligendi molestias velit minima incidunt fugit. Consequatur, delectus officia. Ullam adipisci dolorum neque officiis. Consectetur ab sint fugiat! Iste perspiciatis quo, illum quis, natus placeat repellendus repudiandae saepe harum aliquam explicabo incidunt sunt quae odio ex dolore quisquam sint, veniam nisi atque voluptatibus accusamus quod? Accusantium officia ducimus autem eum saepe maiores rem obcaecati maxime, cumque inventore at tempore fugit unde enim, quas itaque voluptatem commodi optio corporis quae iste ratione. Totam doloribus atque porro sapiente? Natus, voluptatum doloremque, iure eaque, blanditiis temporibus unde possimus provident molestias illo saepe architecto? Repellendus voluptatibus laborum maxime eaque eligendi repellat ducimus hic exercitationem repudiandae assumenda a eius totam sunt quisquam nisi, iusto inventore, doloremque modi minima laboriosam architecto accusamus aliquid. Nisi sed quam non ipsa natus facere sit? Quasi, soluta quas eum accusantium earum eos rem minima neque voluptatibus provident velit ea amet facilis. Voluptas sint iure atque, inventore natus rerum labore eligendi maiores similique quibusdam. Eos, quae explicabo cupiditate obcaecati reprehenderit dolorum harum nemo quas repellat ex voluptatem nam distinctio ipsam dolore? Eligendi odio, voluptas deserunt animi, voluptatum earum magnam perspiciatis veniam eum, obcaecati repudiandae incidunt nesciunt! A incidunt nihil distinctio voluptates commodi veritatis ipsa neque inventore sapiente cupiditate sed aperiam ad earum quas reiciendis ducimus corrupti, dignissimos veniam natus magni vitae nulla quod consectetur. Cupiditate, officia sint quidem error voluptatem amet aliquam. Repellendus culpa praesentium odit error, impedit cum ab labore recusandae alias minima! Ex ratione est modi eveniet quia animi labore, atque porro voluptates dolores enim asperiores tempore laborum incidunt saepe molestias eius doloremque iusto iure sed hic cum beatae. Dignissimos culpa nobis maiores et similique corporis est. Minima architecto similique quisquam aut voluptate, inventore dolores facere eum odit accusantium! Ducimus culpa quia ipsum omnis aliquam impedit!</p>

    </div>

</main>
@endsection
