tring): string | number;
}

interface Map<K, V> {
    readonly [Symbol.toStringTag]: "Map";
}

interface WeakMap<K extends object, V> {
    readonly [Symbol.toStringTag]: "WeakMap";
}

interface Set<T> {
    readonly [Symbol.toStringTag]: "Set";
}

interface WeakSet<T extends object> {
    readonly [Symbol.toStringTag]: "WeakSet";
}

interface JSON {
    readonly [Symbol.toStringTag]: "JSON";
}

interface Function {
    /**
     * Determines whether the given value inherits from this function if this function was used
     * as a constructor function.
     *
     * A constructor function can control which objects are recognized as its instances by
     * 'instanceof' by overriding this method.
     */
    [Symbol.hasInstance](value: any): boolean;
}

interface GeneratorFunction {
    readonly [Symbol.toStringTag]: "GeneratorFunction";
}

interface Math {
    readonly [Symbol.toStringTag]: "Math";
}

interface Promise<T> {
    readonly [Symbol.toStringTag]: "Promise";
}

interface PromiseConstructor {
    readonly [Symbol.species]: PromiseConstructor;
}

interface RegExp {
    /**
     * Matches a string wi