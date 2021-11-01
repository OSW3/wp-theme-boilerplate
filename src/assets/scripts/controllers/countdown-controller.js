/**
 * Countdown Controller
 */

import { Controller } from "stimulus";

export default class extends Controller { 

    options = {

        goal:                   null,
        refresh_interval:       1000, // 1000 = 1 sec

        // Class Name
        class_wrapper:          'cd-timer',
        class_item:             'cd-item',
        class_value:            'cd-value',
        class_label:            'cd-label',
        class_item_years:       'cd-years',
        class_item_months:      'cd-months',
        class_item_days:        'cd-days',
        class_item_hours:       'cd-hours',
        class_item_minutes:     'cd-minutes',
        class_item_seconds:     'cd-seconds',

        // Show Items
        show_years:             false,
        show_months:            false,
        show_days:              true,
        show_hours:             true,
        show_minutes:           true,
        show_seconds:           true,

        // Default value
        default_item_years:     '0',
        default_item_months:    '0',
        default_item_days:      '0',
        default_item_hours:     '0',
        default_item_minutes:   '0',
        default_item_seconds:   '0',

        // Labels
        label_item_years:       'years',
        label_item_months:      'months',
        label_item_days:        'days',
        label_item_hours:       'hours',
        label_item_minutes:     'minutes',
        label_item_seconds:     'seconds',
    }

    // items = {}

    connect() 
    {
        this.element.classList.add( this.options.class_wrapper );

        // Define the target date
        if (this.element.dataset.target)
        {
            this.options.goal = new Date( this.element.dataset.target ).getTime();
        }


        // Create Items Nodes
        ['years','months','days','hours','minutes','seconds'].forEach(node => {
            this.createNode(node);
        });

        this.refreshNode();
    }

    createNode(nodeName)
    {
        if (this.options[`show_${nodeName}`]) 
        {    
            let value = document.createElement('SPAN');
                value.classList.add( this.options.class_value );
                value.innerHTML = this.options[`default_item_${nodeName}`];

            let label = document.createElement('SPAN');
                label.classList.add( this.options.class_label );
                label.innerHTML = this.options[`label_item_${nodeName}`];

            let node = document.createElement('DIV');
                node.classList.add( this.options.class_item );
                node.classList.add( this.options[`class_item_${nodeName}`] );

                node.appendChild( value );
                node.appendChild( label );

            this.element.appendChild( node );
        }
    }

    refreshNode()
    {
        setInterval(() => {
    
            // Get today's date and time
            let now = new Date().getTime();
    
            // Find the distance between now and the count down date
            let remain = this.options.goal - now;

            ['years','months','days','hours','minutes','seconds'].forEach(nodeName => {

                // let item = this.element.getElementsByClassName( this.options[`class_item_${nodeName}`] )[0];
                let node = this.element.querySelector( `.${this.options[`class_item_${nodeName}`]} .${this.options.class_value}` );
                if (node)
                {
                    node.innerHTML = this.convertTime(remain, nodeName);
                }

            });
            // console.log( remain );

        }, this.options.refresh_interval);
    }

    convertTime(timestamp, unit)
    {
        let value = 0;

        // 
        switch (unit)
        {
            case 'years':
            break;
            case 'months':
            break;
            case 'days':
                value = Math.floor(timestamp / (1000 * 60 * 60 * 24));
            break;
            case 'hours':
                value = Math.floor((timestamp % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            break;
            case 'minutes':
                value = Math.floor((timestamp % (1000 * 60 * 60)) / (1000 * 60));
            break;
            case 'seconds':
                value = Math.floor((timestamp % (1000 * 60)) / 1000);
            break;
        }
   
        return value <= 9 ? "0"+value : value;;
    }
}
