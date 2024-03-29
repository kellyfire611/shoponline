ch for and replace matches within a string.
     * @param replacer A function that returns the replacement text.
     */
    replace(searchValue: { [Symbol.replace](string: string, replacer: (substring: string, ...args: any[]) => string): string; }, replacer: (substring: string, ...args: any[]) => string): string;

    /**
     * Finds the first substring match in a regular expression search.
     * @param searcher An object which supports searching within a string.
     */
    search(searcher: { [Symbol.search](string: string): number; }): number;

    /**
     * Split a string into substrings using the specified separator and return them as an array.
     * @param splitter An object that can split a string.
     * @param limit A value used to limit the number of elements returned in the array.
     */
    split(splitter: { [Symbol.split](string: string, limit?: number): string[]; }, limit?: number): string[];
}

interface ArrayBuffer {
    readonly [Symbol.toStringTag]: "ArrayBuffer";
}

interface DataView {
    readonly [Symbol.toStringTag]: "DataView";
}

interface Int8Array {
    readonly [Symbol.toStringTag]: "Int8Array";
}

interface Uint8Array {
    readonly [Symbol.toStringTag]: "UInt8Array";
}

interface Uint8ClampedArray {
    readonly [Symbol.toStringTag]: "Uint8ClampedArray";
}

interface Int16Array {
    readonly [Symbol.toStringTag]: "Int16Array";
}

interface Uint16Array {
    readonly [Symbol.toStringTag]: "Uint16Array";
}

interface Int32Array {
    readonly [Symbol.toStringTag]: "Int32Array";
}

interface Uint32Array {
    readonly [Symbol.toStringTag]: "Uint32Array";
}

interface Float32Array {
    readonly [Symbol.toStringTag]: "Float32Array";
}

interface Float64Array {
    readonly [Symbol.toStringTag]: "Float64Array";
}

interface ArrayConstructor {
    readonly [Symbol.species]: ArrayConstructor;
}
interface MapConstructor {
    readonly [Symbol.species]: MapConstructor;
}
interface SetConstructor {
    readonly [Symbol.species]: SetConstructor;
}
interface ArrayBufferConstructor {
    readonly [Symbol.species]: ArrayBufferConstructor;
}                                                                                                                                                                                                     