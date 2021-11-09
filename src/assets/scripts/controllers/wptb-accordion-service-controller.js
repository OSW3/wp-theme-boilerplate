import { Controller } from "stimulus";
// import { Collapse } from 'bootstrap';

export default class extends Controller {
    // static targets = ['modal'];


    connect() 
    {
        this.reset();

        window.addEventListener('resize', event => this.reset());
    }


    reset()
    {
        let items = this.element.querySelectorAll(".wptb-accordion-item");
        let items_length = items.length;
        let items_length_plus = items_length+1;

        let container_width = this.element.clientWidth;

        let close_item_width = container_width / items_length_plus;
        let open_item_width = close_item_width * 2;

        items.forEach((item, key) => {

            // Item size on load
            if (key == 0 )
            {
                item.style.width = `${open_item_width}px`;
                item.classList.add("active");
            }
            else
            {
                item.style.width = `${close_item_width}px`;
                item.classList.remove("active");
            }
            
            let item_header = item.querySelector('.wptb-accordion-header');
            let item_body = item.querySelector('.wptb-accordion-body');

            item_header.style.width = `${close_item_width}px`;
            item_body.style.width = `${close_item_width}px`;

            // On mouse over
            item.addEventListener('mouseover', e => {

                // reset all other
                items.forEach(item => {
                    item.style.width = `${close_item_width}px`;
                    item.classList.remove("active");
                });

                item.style.width = `${open_item_width}px`;
                item.classList.add("active");
            });
        });
    }
}