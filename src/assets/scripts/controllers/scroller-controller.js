/**
 * Scroller
 * --
 * 
 * Add 'data-scroller' attr on element to spy
 * 
 * Add a breakpoint action
 * 1. <div data-breakpoint="theBpId">
 * 2. Define the BreakPoint to the object
 *  breakpoints = {
 *      theBpId: {
 *          position: 100,
 *          direction: 'up', // up, down, both
 *          action: function(){alert('PPPP')}
 *      },
 *  }
 */

import { Controller } from "stimulus";

const NEVER_SCROLLED    = "never-scrolled";
const SCROLLED          = "scrolled";
const SCROLL_PAUSE      = "scroll-pause";
const SCROLL_END        = "scroll-end";
const SCROLL_UP         = "scroll-up";
const SCROLL_DOWN       = "scroll-down";

export default class extends Controller 
{
    /**
     * Nodes of nodes are spyed
     */
    nodes = [];

    /**
     * Positions memory
     * is used to define if scroll up or scroll down
     */
    positions = {};


    breakpoints = {
        azerty: {
            position: 100,
            direction: 'down', // up, down, both
            // action: function(){alert('AZERTY')}
        },
        poiuyt: {
            position: 100,
            direction: 'up', // up, down, both
            // action: function(){alert('PPPP')}
        },
    };

    initialize() 
    {
        // Add the first node "document"
        this.nodes.push(document);

        // Get nodes with the attr "data-scroller"
        document.querySelectorAll('[data-scroller]').forEach(node => { 
            this.nodes.push(node) 
        });
    }

    connect() 
    {
        this.nodes.forEach((node, index) => {

            this._addClass(node == document ? document.querySelector('html') : node, NEVER_SCROLLED);
            
            node.addEventListener('scroll', event => {

                node = node == document ? document.querySelector('html') : node;

                this.onScroll(index, node);
            });
        });
    }

    onScroll(index, node)
    {
        let scrollTop       = node.scrollTop;
        let scrollHeight    = node.scrollHeight;
        let offsetHeight    = node.offsetHeight;
        let contentHeight   = scrollHeight - offsetHeight;

        // Set Scroll Pause
        // --
        this._deleteClass(node, SCROLL_PAUSE);

        // Set scrolled
        // --
        if (scrollTop > 0) 
        {
            this._deleteClass(node, NEVER_SCROLLED);
            this._addClass(node, SCROLLED);
        }

        // Set scroll end
        // --
        contentHeight <= scrollTop 
            ? this._addClass(node, SCROLL_END)
            : this._deleteClass(node, SCROLL_END)
        ;

        // Set scroll direction
        // --
        if (this.positions[index] > scrollTop)
        {
            this._deleteClass(node, SCROLL_DOWN);
            this._addClass(node, SCROLL_UP);
        }
        else if (this.positions[index] < scrollTop)
        {
            this._deleteClass(node, SCROLL_UP);
            this._addClass(node, SCROLL_DOWN);
        }

        // Add scroll pause
        // --
        let timer = null;

        if(timer !== null) clearTimeout(timer);        
        
        timer = setTimeout(() => {
            this._addClass(node, SCROLL_PAUSE);
        }, 500);


        // Breakpoints
        // --

        if (node.dataset.breakpoint)
        {
            let breakpoints = node.dataset.breakpoint.split(',');
            
            breakpoints.forEach(breakpoint => {
    
                breakpoint = this.breakpoints[breakpoint];
    
                if (breakpoint)
                {
                    if ((breakpoint.direction == 'up' || breakpoint.direction == 'both') && this.positions[index] > scrollTop && breakpoint.position >= scrollTop && 'function' == typeof(breakpoint.action))
                    {
                        (breakpoint.action)();
                    }
                    else if ((breakpoint.direction == 'down' || breakpoint.direction == 'both') && this.positions[index] < scrollTop && breakpoint.position <= scrollTop && 'function' == typeof(breakpoint.action))
                    {
                        (breakpoint.action)();
                    }
                }
            });
        }



        this.positions[index] = scrollTop;
    }

    /**
     * Check if a node has a class
     * 
     * @param {*} node 
     * @param {*} className 
     * @returns bool
     */
    _hasClass(node, className)
    {
        return node.classList.contains(className);
    }

    /**
     * Add a class to a node
     * 
     * @param {*} node 
     * @param {*} className 
     */
    _addClass(node, className)
    {
        if (!this._hasClass(node, className))
        {
            node.className = (node.className + ' '+className).trim();
        }
    }

    /**
     * Delete a class from a node
     * 
     * @param {*} node 
     * @param {*} className 
     */
    _deleteClass(node, className)
    {
        if (this._hasClass(node, className))
        {
            node.className = node.className.replace(className, '').trim();
        }
    }

    /**
     * Toggle Add/Delete a class on a node
     * @param {*} node 
     * @param {*} className 
     */
    _toggleClass(node, className)
    {
        this._hasClass(node, className)
            ? this._deleteClass(node, className)
            : this._addClass(node, className);
    }
}